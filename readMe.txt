Project Setup: Running Locally with XAMPP
-----------------------------------------

1. Start XAMPP
   - Open the XAMPP Control Panel.
   - Start the Apache and MySQL modules.

2. Import the Database
   - Open your browser and go to: http://localhost/phpmyadmin
   - Create a new database (e.g., my_database).
   - Import the provided sql.zip file into this database:
     - Click on the Import tab.
     - Select the sql.zip file.
     - Click Go.
       This will automatically create the necessary tables.

3. Update the Database Configuration
   - Open the connection.php file located in the project folder.
   - Change the database name to the one you created in phpMyAdmin, for example:
     $database = 'my_database';

4. Place Project Files in htdocs
   - Copy the entire project folder.
   - Paste it into the htdocs directory inside your XAMPP installation folder.
     The default path is:
     C:\xampp\htdocs\

5. Running the Project
   - Open your browser.
   - Navigate to the following URL:
     http://localhost/project-folder-name
     (Replace project-folder-name with the name of your project folder.)
   - Your project will now be up and running locally!
   - You can interact with the application as intended.

-------------------------------------------------------------

Troubleshooting
---------------

Apache or MySQL Not Starting
- Ensure no other application (e.g., Skype, IIS) is using ports 80 or 3306.
- Change the port settings in the XAMPP Control Panel if needed.

Database Connection Issues
- Double-check that the database name in connection.php matches the one you created.
- Ensure the MySQL credentials in connection.php are correct. Default for XAMPP:
  $username = 'root';
  $password = '';

File Not Found or Access Issues
- Ensure all project files are correctly placed in the htdocs folder.
- Double-check the project folder name in the URL.

-------------------------------------------------------------

Notes
-----
- For security purposes, avoid using default usernames and passwords in production environments.
- Keep XAMPP updated to prevent compatibility issues.
