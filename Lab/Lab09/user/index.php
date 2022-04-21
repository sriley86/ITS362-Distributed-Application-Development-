
<?php 
session_start();
//(!isset($_SESSION['user']));
include '../view/header.php';

?>
<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>
 <!-- the body section -->
<body>
<main> 
            <p><a href="../login/logout.php">Logout</a></p>
            <!-- display a table of students -->
            <p><a href='../students/'>All Students</a></p>
            <br>
            <h3>Query Students Database</h3>
            <p><a href='../name/'>Students Name</a>&nbsp;&nbsp;&nbsp;<a href='../hometown/'>Students Hometown</a>&nbsp;&nbsp;&nbsp;<a href='../age/'>Students Age</a></p>
            <p><a href='../major/'>Students Major </a>&nbsp;&nbsp;&nbsp;<a href='../gender/'>Students Gender</a>&nbsp;&nbsp;&nbsp;<a href='../gpa/'>Students GPA</a></p>
        </section>
    </main>
<?php include '../view/footer.php'; ?>