<?php include '../view/header.php'; ?>

    
    <main>
        <body>
        <section>
            <!-- display a table of products -->
            <h2>List of all Students by Major</h2>
            <table>
            <tr>
                    <th>Name</th>
                    <th>Major</th>
                </tr>
                <?php foreach ($studentList as $student) : ?>
                <tr>
                    <td><?php echo $student['Name']; ?></td>
                    <td><?php echo $student['Major']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        
            <p><a href="../index.php">Home Page</a>
        </section>
        </body>
    </main>
<?php include '../view/footer.php'; ?>