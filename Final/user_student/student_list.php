
<?php include '../view/header.php'; ?>
        <main>
            <body>
                <section>
                        <!-- display a table of students -->
                        <h2>List of Students</h2>
                        <table>
                        <tr>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Age</th>
                            </tr>
                            <?php foreach ($studentList as $student) : ?>
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
                                <td>
					<a href="#" class="delete-btn" onclick="document.getElementById(`delete-student-<?php echo $student['StudentID']?>`).submit()">Update</a>
					<form method="post" id="update-student-<?php echo $student['StudentID'] ?>">
						<input type="hidden" name="action" value="update">
						<input type="hidden" name="student2" value="<?php echo $student['StudentID'] ?>">
					</form>
				</td>	
                
							
			            </tr>
			
		<?php endforeach; ?>
                        </table>

                        <br>
                        <form action='../user/index.php'> <input type='submit'value='Home Page'></form>
                 </section>
            </body>
        </main>
<?php include '../view/footer.php'; ?>