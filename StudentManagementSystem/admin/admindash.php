<?php

session_start();

if($_SESSION['uid'])
{
    echo "";
}
else
{
    header('location:../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/stylesheet.css" rel="stylesheet" type="text/css">
    <title>Admin Dashboard</title>
</head>
<body>

    <div class="heading">
        <h4 class="top-heading"><a href="logout.php">Logout</a></h4>   
        <h1 class="main-heading">Admin Dashboard</h1>
    </div>

    <div class="admin-options">
        <a href="add-student.php" class="studenticon"> <img src="../assets/img/addstudent.png" /> <br> Insert Student Details</a> </br>
        <a href="update-student.php" class="studenticon"> <img src="../assets/img/addstudent.png" /> <br> Update Student Details</a> </br>
        <a href="delete-student.php" class="studenticon"> <img src="../assets/img/deletestudent.png"/> <br> Delete Student Details</a> </br>
    </div>


    <footer>
    <div class="footer">
        <p class="footer-text" > Student Management System &copy 2018 </p>
    </div>
</body>
</html>