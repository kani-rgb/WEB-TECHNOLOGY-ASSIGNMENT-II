CREATE DATABASE IF NOT EXISTS student_portal;
USE student_portal;
CREATE TABLE IF NOT EXISTS students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 roll_number VARCHAR(30) NOT NULL UNIQUE,
 email VARCHAR(150),
 course VARCHAR(150) NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS student_files (
 id INT AUTO_INCREMENT PRIMARY KEY,
 student_id INT NOT NULL,
 file_path VARCHAR(255) NOT NULL,
 file_type VARCHAR(100) NOT NULL,
 original_name VARCHAR(255) NOT NULL,
 upload_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_student_files_student FOREIGN KEY(student_id) REFERENCES students(id) ON DELETE CASCADE
);
INSERT INTO students(name,roll_number,email,course) VALUES ('Kanishka S','24CS088','kanishka@example.com','B.E. Computer Science and Engineering') ON DUPLICATE KEY UPDATE name=VALUES(name), email=VALUES(email), course=VALUES(course);
