<?php include '../view/header.php'; ?>

    
    <main>
        <body>
        <section>
            <!-- display a table of products -->
            <h2>List of all Students by Age</h2>
            <table>
            <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
                <?php foreach ($studentList as $student) : ?>
                <tr>
                    <td><?php echo $student['Name']; ?></td>
                    <td><?php echo $student['Age']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        
            <p><a href="../index.php">Home Page</a>
        </section>
        </body>
    </main>
<?php include '../view/footer.php'; ?>