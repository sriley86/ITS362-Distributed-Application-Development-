
<?php 
session_start();
//(!isset($_SESSION['user']));
include '../view/header.php';

?>
<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>

<body>
<main> 
            <form action='../login/logout.php'> <input type='submit'value='User Logout'></form>
        
            <form action='../students/'> <input type='submit'value='View/Add Students'></form>

            <form action='../name/'> <input type='submit'value='Query for Last Name "Smith"'></form>
        </section>
    </main>
<?php include '../view/footer.php'; ?>