<?php

session_start();
if(isset($_SESSION['uid']))
{
	echo"";
}
else{
	header('location:../login.php');

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Students</title>
	<link href="../assets/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="heading">
        <h4 class="top-heading"><a href="logout.php">Logout</a></h4><h4 class="top-heading"><a href="admindash.php">Back to Dashboard</a></h4>  
        <h1 class="main-heading">UPDATE STUDENT DETAILS</h1>
    </div>

	<div align='center'>
		<form action="update-student.php" method='post'>
			<table>
				<tr>
					<th>Enter Student Class:</th>
					<td><input type="number" name='class' placeholder='Enter Student Class'></td>
					<th>Enter Student Name:</th>
					<td><input type="text" name='name' placeholder='Enter Student Class'></td>
					<td colspan='2'> <input type="submit" value="Search" name='submit'> </td>
				</tr>
			</table>
		</form>
	</div>


	<table align='center' style="width:80%; margin-top:20px;" border=1>
		<tr text-align="center">
			<th>No.</th>
			<th>Image</th>
			<th>Name</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Action</th>
		</tr>

<?php

if(isset($_POST['submit'])){
	
	include('../dbcon.php');
	$class = $_POST['class'];
	$name = $_POST['name'];


	$query = "SELECT * FROM `student` WHERE `class`= '$class' OR `name` LIKE '%$name%'";

	$run = mysqli_query($conn,$query);

	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='6'>No record Found</td></tr>";
	}
	else{
		$count=0;
		while($data = mysqli_fetch_assoc($run))
		{
			$count++;
			?>
				<tr align="center">
					<td><?php echo $count ?></td>
					<td><img src="../assets/data-img/<?php echo $data['image']; ?>" alt="Student Image" style="max-width:70px";></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['address']; ?></td>
					<td><?php echo $data['contact']; ?></td>
					<td><a href="update-student-form.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
				</tr>



			<?php

		}
	}
}
?>


	</table>

	<footer>
    <div class="footer">
        <p class="footer-text" > Student Management System &copy 2018 </p>
    </div>

</body>
</html>
