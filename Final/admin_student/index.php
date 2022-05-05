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

} if ($action == 'delete') {
    $id = $_REQUEST['student1'];
	try{
		$sqlstmt3 = 'DELETE FROM student WHERE StudentID = :StudentID';
		
		global $db;
		$stmt3 = $db->prepare($sqlstmt3);
		$stmt3->bindValue(':StudentID', $id);
		$stmt3->execute();
		$stmt3->closeCursor();
		header("Refresh:0");
	}
	catch(PDOException $e) {
		echo $e->getMessage();	
	}

} 
?>