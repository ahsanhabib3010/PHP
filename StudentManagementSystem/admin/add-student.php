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
    <title>Add Student - Admin</title>
</head>
<body>
    <div class="heading">
        <h4 class="top-heading"><a href="logout.php">Logout</a></h4><h4 class="top-heading"><a href="admindash.php">Back to Dashboard</a></h4>  
        <h1 class="main-heading">ADD STUDENT DETAILS</h1>
    </div>

    <form action="add-student.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
            <td>Rollno:</td>
            <td><input type=text name="std-rollno" placeholder="Enter Student Roll number" required></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type=text name="std-name" placeholder="Enter Student Name" required></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type=text name="std-address" placeholder="Enter Student Address" required></td>
        </tr>
        <tr>
            <td>Contact:</td>
            <td><input type=text name="std-contact" placeholder="Enter Contact Number" required></td>
        </tr>
        <tr>
            <td>Class:</td>
            <td><input type=text name="std-class" placeholder="Enter Student Class" required></td>
        </tr>
        <tr>
            <td>Student Image:</td>
            <td><input type=file name="stdimg"></td>
        </tr>
        <tr>
        <td colspan="2"> <input type="submit" name="submit" value="Add Student"> </td>
        
        </tr>
    </table>
    </form>
</body>
</html>


<?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');

    $rollno = $_POST['std-rollno'];
    $name = $_POST['std-name'];
    $address = $_POST['std-address'];
    $contact = $_POST['std-contact'];
    $class = $_POST['std-class'];

    $stdimage = $_FILES['stdimg']['name'];
    $tempname = $_FILES['stdimg']['tmp_name'];

    move_uploaded_file($tempname,"../assests/data-img/$stdimage");


    $query= "INSERT INTO `student`(`rollno`, `name`, `address`, `contact`, `class`, `image`) VALUES ('$rollno', '$name', '$address', '$contact', '$class', '$stdimage')";

    $run = mysqli_query($conn,$query);
    // echo $insertQuery;

    if($run ==  true)
    {
        ?>
        <script>
        alert("Data inserted Successfully...");
        </script>
      <?php
        
    }
    
}

?>