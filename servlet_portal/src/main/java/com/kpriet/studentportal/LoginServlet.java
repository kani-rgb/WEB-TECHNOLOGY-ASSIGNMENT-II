package com.kpriet.studentportal;
import javax.servlet.*;import javax.servlet.http.*;import java.io.*;
public class LoginServlet extends HttpServlet { protected void doPost(HttpServletRequest req,HttpServletResponse res)throws IOException{String u=req.getParameter("username"),p=req.getParameter("password");if("admin".equals(u)&&"admin123".equals(p)){req.getSession().setAttribute("loggedIn",true);res.sendRedirect("students");}else{res.sendRedirect("login.jsp?error=1");}} }
