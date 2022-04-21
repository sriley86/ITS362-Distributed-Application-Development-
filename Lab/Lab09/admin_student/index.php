<?php
require('../model/database.php');
require('../model/students_db.php');

session_start();

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
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
        $name = filter_input(INPUT_POST, 'Name');
        $hometown = filter_input(INPUT_POST, 'Hometown');
        $age = filter_input(INPUT_POST, 'Age');
        $major = filter_input(INPUT_POST, 'Major');
        $gender = filter_input(INPUT_POST, 'Gender');
        $gpa = filter_input(INPUT_POST, 'GPA');

        // Validate the inputs
        if (empty($id) ||empty($name) || empty($hometown) || empty($age) || empty($major) ||
                empty($gender) || empty($gpa)) {
            $error = "Invalid student data. Check all entries and try again.";
            include('../errors/error.php');
        } else {
            add_student($id, $name, $hometown, $age, $major, $gender, $gpa);
            header("Location: .");
        }
        break;
}
?>