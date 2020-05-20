For this project, I decided to take my old website and connect it to a mySql database.
To do this, I used many different tools and languages. 
First I created some HTML pages and linked them together, then I created a CSS file to stylize the site to catch a users eye and make them want to use the website. 
I then updated it for XXAMP and Apache to help me host the webpage and create the SQL tables using PHPMyAdmin.
I then used PHP to connect to the database and pull information to list products, their price and the amount in stock. 
I also pulled another table for the address of store locations to display on another page.

I wanted to do this because I had some experience creating basic HTML pages, and I wanted to learn how a fully functioning webpage would actually work.
In this process I learned that PHP is used to access databases for this exact purpose, so I learned how to write PHP. 
I then Learned that XXAMP would be an easy way to deploy a webpage with all these components, and to host my page locally using Apache. 
XXAMP also allowed me to create SQL tables and populate them using PHPMyAdmin. 
To connect to these tables, I made a php file called connect.php, which uses a username and password to login to the database. 
Every page which connects must use this file.
	
SetUp:  
In order to get the host correctly running and connected, a few steps must be followed. 
First, XXAMP must be downloaded and installed, remember the location the XXAMP files are saved to, as we will be modifying them later. 
Verify that the XAMPP control panel runs correctly. 
Next, assess the XXAMP folder that you installed to, and access the ..xxamp/htdocs folder and delete everything and replace it with the files in htdocs Data. 
Once that’s done go to your xxamp folder again and ..xampp\mysql and delete the data folder, and replace it with the one in My SQL Data. 
Once this is complete, the website should be able to run correctly. 
Open the XAMPP control panel and Start the Apache server and Start the MySQL server. 
Once both have been started, the webpage should be accessible via localhost at http://localhost/HomePage.html and the Sql data can be viewed on http://localhost/DisplayInfo.php and on http://localhost/locations.php.
