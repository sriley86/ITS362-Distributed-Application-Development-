
<?php include '../view/header.php'; ?>
<main>

    <h1>Add Student</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_student">
       
        <label>StudentID:</label>
        <input type="text" name="StudentID"><br>

        <label>First Name:</label>
        <input type="text" name="firstName"><br>

        <label>Last Name:</label>
        <input type="text" name="lastName"><br>

        <label>Date of Birth 99/99/9999 Format:</label>
        <input type="text" name="dateOfBirth"><br>

        <label>&nbsp;</label>
        <input type="submit" name= 'add_student' value="Add Student"><br>
    </form> 
    <a href="../students">View Student List</a>
         
</main>
<?php include '../view/footer.php'; ?>
