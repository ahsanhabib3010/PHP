
<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="assets/css/stylesheet.css" rel="stylesheet" type="text/css">
    <title>Admin Login</title>
</head>
<body>
	<div class="heading">
        <h3 align="right" class="top-heading"> <a href="index.php">Back to Main Page</a></h3>
        <h1 class="main-heading">Admin Login</h1>
    </div>

	<div class="admin-card">
	<img  class="adminloginpic" src="assets/img/adminlogin.png" />
		<form method="post" action="login.php">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" class="inputfields" name="username" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" class="inputfields" name="password" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" class="submitbutton" name="login" value="LOGIN"></td>
				</tr>
			</table>	
		</form>
	</div>
	<footer>
    <div class="footer">
        <p class="footer-text" > Student Management System &copy 2018 </p>
    </div>
</footer>
</body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_num_rows($result);
	if($row < 1)
	{
		?>
		<script>
			alert("Username or Password incorrect");
			window.open('login.php','_self');
		</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($result);

		$id = $data['id'];
		
		$_SESSION['uid'] = $id;
		header('location:admin/admindash.php');
	}

}