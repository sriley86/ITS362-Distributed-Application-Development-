<?php
session_start();
   require('../model/database.php');
   require('../model/students_db.php');
   require('../model/admin_db.php');

include '../view/header.php';

?>
<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>


 <!-- the body section -->
<body>
<main> 
            <form action='../login/logout.php'> <input type='submit'value='Admin Logout'></form>
            <form action='../admin_student/'> <input type='submit'value='View/Delete Students'></form>
    </main>
<?php include '../view/footer.php'; ?>