package com.kpriet.studentportal;
import java.sql.*;
public class DB {
 public static Connection get() throws SQLException { return DriverManager.getConnection("jdbc:mysql://localhost:3306/student_portal?useSSL=false&serverTimezone=UTC","root",""); }
}
