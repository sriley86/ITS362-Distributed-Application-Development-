<?php
   require('../model/database.php');
   require('../model/students_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'studentList';
    }
}  

        $studentList=get_studentsHometown();
        include('hometown_list.php');

?>