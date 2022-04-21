
<?php include '../view/header.php'; ?>

<main>
    <h1>Add Student</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_student">
       
        <label>StudentID:</label>
        <input type="text" name="StudentID"><br>

        <label>Name:</label>
        <input type="text" name="Name"><br>

        <label>Hometown:</label>
        <input type="text" name="Hometown"><br>

        <label>Age:</label>
        <input type="text" name="Age"><br>

        <label>Major:</label>
        <input type="text" name="Major"><br>

        <label>Gender:</label>
        <input type="text" name="Gender"><br>

        <label>GPA:</label>
        <input type="text" name="GPA"><br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Student"><br>
    </form>
    <p><a href="?action=student_list">View Student List</a></p>

</main>
<?php include '../view/footer.php'; ?>