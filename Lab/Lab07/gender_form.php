<?php
    require_once('database.php');

    // Get all categories
    $queryAllStudents = 'SELECT * FROM Student
              ORDER BY Gender';
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
    <title>age_form</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Students</h1></header>
    <main>

        <section>
            <!-- display a table of products -->
            <h2>List of all Students by Gender</h2>
            <table>
            <tr>
                    <th>Name</th>
                    <th>Gender</th>
                </tr>
                <?php foreach ($studentList as $student) : ?>
                <tr>
                    <td><?php echo $student['Name']; ?></td>
                    <td><?php echo $student['Gender']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        
            <p><a href="index.php">Home Page</a>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sharyl Riley</p>
    </footer>
</body>
</html>