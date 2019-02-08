<?php

session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>

<?php

include('../dbcon.php');

$sid = $_GET['sid'];

$query = "SELECT * FROM `student` WHERE `id` = '$sid' ";
$run = mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student Details</title>
</head>
<body>
<form action="update-student-data.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
            <td>Rollno:</td>
            <td><input type=text name="std-rollno" value=<?php echo $data['rollno'] ?> required></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type=text name="std-name" value=<?php echo $data['name'] ?> required></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type=text name="std-address" value=<?php echo $data['address'] ?> required></td>
        </tr>
        <tr>
            <td>Contact:</td>
            <td><input type=text name="std-contact" value=<?php echo $data['contact'] ?> required></td>
        </tr>
        <tr>
            <td>Class:</td>
            <td><input type=text name="std-class" value=<?php echo $data['class'] ?> required></td>
        </tr>
        <tr>
            <td>Student Image:</td>
            <td><input type=file name="stdimg"></td>
        </tr>
        <tr>
        <input type="hidden" value="<?php echo $data['id']; ?>" name="stuid" />
        <td colspan="2"> <input type="submit" name="submit" value="Update Student"> </td>
        
        </tr>
    </table>
    </form>
</body>
</html>