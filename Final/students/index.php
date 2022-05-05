
<?php 
session_start();
require('../model/database.php');
require('../model/students_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
 $action = filter_input(INPUT_GET, 'action');
 if ($action == NULL) {
     $action = 'student_list';
 }
}  

switch ($action) {
    case 'student_list':
        // Get product data
        $studentList = get_students();

        // Display the product list
        include('student_list.php');
        break;
    case 'show_add_form':
        include('student_add.php');
        break;
    case 'add_student':
        $id = filter_input(INPUT_POST, 'StudentID');
        $fname = filter_input(INPUT_POST, 'firstName');
        $lname = filter_input(INPUT_POST, 'lastName');
        $dob = filter_input(INPUT_POST, 'dateOfBirth');
        
        // Validate the inputs
        if (add_student($id, $fname, $lname, $dob)) {
            header("Location: ../students/index.php");
        } else {
            
            $error = "Invalid student data. Check all entries and try again.";
            include('../errors/error.php');
        }
        break;
}

?>