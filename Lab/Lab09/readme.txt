ITS 362 Ð Distributed Application Development
Lab 09 Ð Login System


Objectives:
1. To learn to establish a login page on your website.

Tasks:
This lab is based upon the previous labs (Lab 7 & Lab 8). 
In the previous lab, you were required to organize your website created in Lab 7 into the Model-View-Controller (MVC) pattern. 
For this lab, you will now need to establish a login page for a regular user and an administrator. 
One way to keep track of users would be to create two tables, one for regular users and one for administrators. 
Should a user log into an administrator account, they should be able to access a page that would allow them to call a query function to insert new values into your database. 
For a normal user, just the page made in Lab 7 (links to constrain table) would suffice. 

You should make use of the header (Location: ) function in your code to send a user to the proper page. 
One way to check to see if a login exists is to count if any rows have been returned as a result of the login query to the admin table first, otherwise check if the username/password combination then exists in the user table.


