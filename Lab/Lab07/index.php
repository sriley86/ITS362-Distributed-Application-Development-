<?php
    require_once('database.php');

    // Get all categories
    $queryAllStudents = 'SELECT * FROM Student
              ORDER BY StudentID';
    $statement2 = $db->prepare($queryAllStudents);
    $statement2->bindValue;
    $statement2->execute();
    $studentList = $statement2->fetchAll();
    $statement2->closeCursor();


?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>ITS362 Lab07</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Students</h1></header>
    <main>

        <section>
            <!-- display a table of products -->
            <h2>List of all Students</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Hometown</th>
                    <th>Age</th>
                    <th>Major</th>
                    <th>Gender</th>
                    <th>GPA</th>
                </tr>
                <?php foreach ($studentList as $student) : ?>
                <tr>
                    <td><?php echo $student['Name']; ?></td>
                    <td><?php echo $student['Hometown']; ?></td>
                    <td><?php echo $student['Age']; ?></td>
                    <td><?php echo $student['Major']; ?></td>
                    <td><?php echo $student['Gender']; ?></td>
                    <td><?php echo $student['GPA']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <h3>Query Students Database</h3>
            <p><a href="name_form.php">Students Name</a>&nbsp;&nbsp;&nbsp;<a href="hometown_form.php">Students Hometown</a>&nbsp;&nbsp;&nbsp;<a href="age_form.php">Students Age</a></p>
            <p><a href="major_form.php">Students Major </a>&nbsp;&nbsp;&nbsp;<a href="gender_form.php">Students Gender</a>&nbsp;&nbsp;&nbsp;<a href="gpa_form.php">Students GPA</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sharyl Riley</p>
    </footer>
</body>
</html>