<?php
session_start();
   require('../model/database.php');
   require('../model/students_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'get_studentSmith';
    }
}  

$studentSmith=get_studentSmith();
        include('name_list.php');

?>