
<?php include '../view/header.php'; ?>
        <main>
            <body>
                <section>
                        <!-- display a table of students -->
                        <h2>List of Students</h2>
                        <table>
                            <tr>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Date of Birth</th>
                                <th>Delete Student</th>

                            </tr>
                            <?php foreach ($studentList as $student) : ?>
                            <tr>
        
                                <td><?php echo $student['lastName']; ?></td>
                                <td><?php echo $student['firstName'];  ?></td>
                                <td><?php echo $student['dateOfBirth']; ?></td>
                              
                                <td>
					<a href="#" class="delete-btn" onclick="document.getElementById(`delete-student-<?php echo $student['StudentID']?>`).submit()">Delete</a>
					<form method="post" id="delete-student-<?php echo $student['StudentID'] ?>">
						<input type="hidden" name="action" value="delete">
						<input type="hidden" name="student1" value="<?php echo $student['StudentID'] ?>">
					</form>
				</td>	
                
							
			            </tr>
			
		<?php endforeach; ?>
                        </table>

                        <br>
                        <form action='../admin/index.php'> <input type='submit'value='Home Page'></form>
                 </section>
            </body>
        </main>
<?php include '../view/footer.php'; ?>