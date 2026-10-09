# Code Explanation

## Question 1 – Front End
- `index.html` creates the student registration form with name, roll number, email, course and file upload.
- `style.css` provides layout, colors, focus states, button styling and responsive mobile behavior.
- `script.js` validates required fields, email format, password strength, file type and file size before accepting the form.

## Question 2 – PHP + MySQL
- `config.php` creates the MySQL connection.
- `index.php` performs the **View** operation and lists students.
- `form.php` supports **Add/Edit** input.
- `save.php` performs **Create/Update**, validates uploaded files and stores unique filenames plus metadata.
- `view.php` displays a student's details and uploaded files.
- `delete.php` performs **Delete**.
- The SQL schema links `student_files` to `students` with a foreign key and cascade delete.

## Question 3 – Servlet + JDBC
- `LoginServlet` authenticates the demo user and creates a session.
- `StudentsServlet` checks the session, uses JDBC to fetch students, and forwards the result to JSP.
- `students.jsp` loops through students and renders dynamic profile data.
- `FileServlet` checks the session, reads the file metadata from MySQL and streams the stored file to the browser.
- `LogoutServlet` invalidates the session.
- `WEB-INF/web.xml` maps the servlet URLs.

# Brief Conclusion
This assignment implements a complete student admission and profile management workflow using HTML5, CSS3, JavaScript, PHP, MySQL, Servlets, JDBC and JSP. Client-side validation improves input quality, while PHP CRUD operations manage student records and file metadata. The Servlet module demonstrates secure session-based access, database retrieval and dynamic profile presentation. Overall, the project connects front-end design, server-side processing and database-driven web content in one practical application.
