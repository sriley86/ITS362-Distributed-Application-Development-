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

if ($action == 'student_list') {
    $id = filter_input(INPUT_POST, 'id', 
            FILTER_VALIDATE_INT);
         // Get student data
         $studentList = get_students();
         // Display the student list
         include('student_list.php');

} if ($action == 'update') {
    $id = $_REQUEST['student2'];
	try{
		$sqlstmt2 = 'UPDATE Student SET lastName = :lname WHERE StudentID = :id';
		
		global $db;
		$stmt2 = $db->prepare($sqlstmt3);
		$stmt2->bindValue(':StudentID', $id);
		$stmt2->execute();
		$stmt2->closeCursor();
		header("Refresh:0");
	}
	catch(PDOException $e) {
		echo $e->getMessage();	
	}

} 
?>