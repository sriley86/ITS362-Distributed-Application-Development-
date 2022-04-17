
<?php include '../view/header.php'; ?>
        <main>
            <body>
                <section>
                        <!-- display a table of students -->
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
                         <p><a href="../index.php">Home Page</a>
                 </section>
            </body>
        </main>
<?php include '../view/footer.php'; ?>
