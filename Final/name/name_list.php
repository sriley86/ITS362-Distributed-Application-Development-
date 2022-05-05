<?php include '../view/header.php'; ?>

    
    <main>
        <body>
        <section>
            <!-- display a table of products -->
            <h2>List of all Students by Last Name SMITH</h2>
            <table>
            <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                </tr>
                <?php foreach ($studentSmith as $student) : ?>
                    <tr>

                                 <?php $firstNameInitial = $student['firstName'][0];?>
                                <td><?php echo $student['lastName'].', '.$firstNameInitial.'.'; ?></td>
                                <td><?php echo $student['dateOfBirth']; ?></td>
                                <?php    /* DateOfBirth(varchar 15) in Database is not stored as Date type. 
                                So assume values are stored as MM/DD/YYYY format as a varchar value. */  
                                $dob = date_create_from_format("m/d/Y",$student['dateOfBirth']);
                                $today = new DateTime('today');
                                $age = date_diff($dob,$today)->format('%y'); //Date difference in years?>
                                <td><?php echo $age;?></td>
                            </tr>
                <?php endforeach; ?>
            </table>
            <br>
        
            <form action='../user/index.php'> <input type='submit'value='Home Page'></form>
        </section>
        </body>
    </main>
<?php include '../view/footer.php'; ?>