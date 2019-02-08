<?php 

$nameError = "";
$emailError = "";
$genderError = "";
$websiteError = "";

	if(isset($_POST['submit']))
	{
		$userName = $_POST["username"];
		$userEmail = $_POST["useremail"];
		//$userGender = $_POST["usergender"];
		$userWebsite = $_POST["userwebsite"];
		$userComments = $_POST["comments"];
		
		// Name Validation
		if (empty($userName))
		{
			$nameError = "Name is Required !";
		}
		else
		{
			$userName = Test_User_Input($_POST["username"]);
			if(!preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $userName))
			{
				$nameError = "Only Letters and Whitespaces are allowed.";

			}
		}

		// Email Validation
		if (empty($userEmail)) 
		{
			$emailError = "Email is Required !";
		}
		else
		{
			$userEmail = Test_User_Input($_POST["useremail"]);
			if (!preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9._-]{2,}/", $userEmail)) 
			{
				$emailError = "Invalid email format.";
			}
		}

		// Gender Validation
		if (empty($_POST["usergender"])) 
		{
			$genderError = "Gender is Required !";
		}
		else
		{
			$userGender = Test_User_Input($_POST["usergender"]);
		}

		// Website Validation
		if (empty($userWebsite)) 
		{
			$websiteError = "Website is Required !";
		}
		else
		{
			$userWebsite = Test_User_Input($_POST["userwebsite"]);
			if (!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/", $userWebsite))
			{
				$websiteError = "Invalid Website URL.";
			}
		}


		if (!empty($userName) && !empty($userEmail) && !empty($userGender) && !empty($userWebsite)) 
		{
			if ((preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $userName)== true) 
				&& (preg_match("/[A-Za-z0-9._-]{3,}@[A-Za-z0-9._-]{3,}[.]{1}[A-Za-z0-9._-]{2,}/", $userEmail) == true) 
				&& (preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/", $userWebsite)== true)) 
			{
			
				echo "<h2>Submitted Data:</h2>";
				echo "Name : " . ucwords($userName) . "<br/>";
				echo "Email : " . strtolower($userEmail). "<br/>";
				echo "Gender : {$userGender} <br/>";
				echo "Website : {$userWebsite} <br/>";
				echo "Comments : {$userComments} <br/>";
			
			$emailto = "ahsanhabib3010@gmail.com";
			$subject = "Contact Form";
			$body = "A person name : " . $userName .
					" with email : " . $userEmail .
					" and gender : " . $userGender .
					" having website : " . $userWebsite . ". Added Comment : " . $userComments; 
			$sender = "ahsanhabib3010@gmail.com";

			if (mail($emailto, $subject, $body)) {
			 	echo "Email Sent Successfully.";
			 }
			else{
				echo "Email Not Sent.";
			 } 
			 
			}
			else
			{
				echo "Place Complete and Correct Information!";
			}
		}
	}

	function Test_User_Input($Data)
	{
		return $Data;
	}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	
	
</head>
<body>

<h2 class="contactUsHeading">Contact Us</h2>
<p class="contactUsPara">We would really love to talk to you.</p>

<div class="form-div">
	<form action="contact-us.php" method="post">
		<div class="form-group">
	  		<label for="usr">Name: * <span class="form-validation-error"><?php echo $nameError; ?></span></label>
	  		<input type="text" class="form-control" name="username">
		</div>
		<div class="form-group">
	  		<label for="usr">Email: * <span class="form-validation-error"><?php echo $emailError; ?></span></label>
	  		<input type="email" class="form-control" name="useremail">
		</div>
		<div class="form-group">
	  		<label for="usr">Gender: * </label>
	  		<div class="form-check-inline">
			  <label class="form-check-label">
			    <input type="radio" class="form-check-input" name="usergender" value="male">Male 
			    <input type="radio" class="form-check-input" name="usergender" value="female">Female 
			  </label>
			</div>
			&nbsp<span class="form-validation-error"><?php echo $genderError; ?></span>
		</div>
		<div class="form-group">
	  		<label for="usr">Website: * <span class="form-validation-error"><?php echo $websiteError; ?> </span> </label>
	  		<input type="text" class="form-control" name="userwebsite">
		</div>
		<div class="form-group">
	  		<label for="usr">Comments:</label>
	  		<textarea class="form-control" rows="4" name="comments"></textarea>
		</div>
		<button class="btn btn-primary submitBtn" type="submit" name="submit">Submit</button>
	</form>
</div>


</body>
</html>