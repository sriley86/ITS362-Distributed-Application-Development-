1. Write a PHP program that connects to a database called ÒStudentListÓ.  
The database contains a table called ÒStudentÓ that contains the following columns 
(StudentID (int, key), LastName (varchar 128), FirstName (varchar 50), and DateOfBirth (varchar 15).  
Write PHP code that queries the ÒStudentÓ table for LastName, FirstName, and 
DateOfBirth for any students with the last name of ÒSmithÓ.  Retrieve all records 
from the database and write the name of the patient as LastName with an initial 
(Smith, G.) as a column to a table in HTML that lists all the records.  
Show DateOfBirth as a second column (format as month/day/year) 
and Age (calculated) as a third column.

2. Add a button to the form in Problem 1 that when clicked displays a text box on 
the web page where the user can input a new lastname, requery the database, 
and display the new content in the table.

3. Create a login page for site in Problem 1 in PHP that asks the user to login 
using a username and password. You should have a corresponding database that 
contains two tables, ÔuserÕ and ÔadministratorÕ. These tables should contain the 
username and password of a user and an administrator in their respective tables. 
You should have different welcome pages for either a user or an administrator. 
A user should only be able to insert a new lastname as in Problem 2, and an 
administrator should be able to delete an entry in the table.
Don't forget to implement a logout feature.

