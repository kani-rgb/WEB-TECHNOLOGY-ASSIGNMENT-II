# Web Technology Assignment II – Student Admission & Profile Portal
**Course:** U21CS501 Web Technology | **Academic Year:** 2026–2027 | **Assignment:** II

## Student
Name: KANISHKA S  
Roll No: 24CS088

## Contents
1. `frontend/` – Question 1 HTML5 registration form, CSS responsive styling and JavaScript client-side validation.
2. `php_admin/` – Question 2 PHP + MySQL CRUD and secure file upload metadata handling.
3. `servlet_portal/` – Question 3 Java Servlet + JDBC + JSP dynamic student profile portal with session handling and file streaming endpoint.
4. `database_schema.sql` – MySQL database/schema and sample student.
5. `screenshots/` – output screenshots prepared for submission.

## Q1 Run
Open `frontend/index.html` in a browser. No server is required for client-side validation.

## Q2 Run
1. Install XAMPP/WAMP with Apache + MySQL.
2. Import `database_schema.sql` in phpMyAdmin.
3. Copy `php_admin` to Apache `htdocs` (for example `htdocs/student_portal_admin`).
4. If your MySQL root password differs, update `php_admin/config.php`.
5. Open `http://localhost/student_portal_admin/index.php`.

## Q3 Run
1. Install JDK 11+, Maven and Apache Tomcat 9.
2. Ensure MySQL is running and the schema has been imported.
3. Update DB credentials in `DB.java` if needed.
4. From `servlet_portal`, run `mvn clean package`.
5. Deploy `target/student-portal.war` to Tomcat `webapps`.
6. Open `/student-portal/`.
7. Demo login: **admin / admin123**.

## Important submission note
The Google Form and GitHub repository are external services. This package is complete for upload, but an actual GitHub URL and Google Form submission require the student's own repository/form access. Do not submit an inaccessible/private link.
