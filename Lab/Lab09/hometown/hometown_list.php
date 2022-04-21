<?php include '../view/header.php'; ?>

    
    <main>
        <body>
        <section>
            <!-- display a table of products -->
            <h2>List of all Students by Hometown</h2>
            <table>
            <tr>
                    <th>Name</th>
                    <th>Hometown</th>
                </tr>
                <?php foreach ($studentList as $student) : ?>
                <tr>
                    <td><?php echo $student['Name']; ?></td>
                    <td><?php echo $student['Hometown']; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
        
            <p><a href="../user/index.php">Home Page</a>
        </section>
        </body>
    </main>
<?php include '../view/footer.php'; ?>