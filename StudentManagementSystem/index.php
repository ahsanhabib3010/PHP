<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <link href="assets/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="heading">
        <h3 align="right" class="top-heading"> <a href="login.php">Admin Login</a></h3>
        <h1 class="main-heading">Welcome to Student Management System</h1>
    </div>
    <div class="indexform">
        <form method="post" action="index.php">
            <table class="indexformtable">
                <tr>
                    <td colspan="2" class="stdinfoheading">Student Information</td>
                </tr>
                <tr>
                    <td>Select Class:</td>
                    <td>
                        <select name="class" required>
                            <option value="1"> 1st </option>
                            <option value="2"> 2nd </option>
                            <option value="3"> 3rd </option>
                            <option value="4"> 4th </option>
                            <option value="5"> 5th </option>
                            <option value="6"> 6th </option>
                            <option value="7"> 7th </option>
                            <option value="8"> 8th </option>
                            <option value="9"> 9th </option>
                            <option value="10"> 10th </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Enter Roll no</td>
                    <td> <input type="text" class="inputfields" name="rollno" required> </td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" class="submitbutton" name="submit" value="Show Info"> </td>
                </tr>
            
            </table>
        </form>
    </div>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];

    include('dbcon.php');
    include('functions.php');

    showDetails($class,$rollno);
}



?>


<footer>
    <div class="footer">
        <p class="footer-text" > Student Management System &copy 2018 </p>
    </div>
</footer>
