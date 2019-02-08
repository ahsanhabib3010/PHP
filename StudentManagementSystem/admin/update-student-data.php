<?php 
  include('../dbcon.php');

  $rollno = $_POST['std-rollno'];
  $name = $_POST['std-name'];
  $address = $_POST['std-address'];
  $contact = $_POST['std-contact'];
  $class = $_POST['std-class'];

  $id = $_POST['stuid'];

  $stdimage = $_FILES['stdimg']['name'];
  $tempname = $_FILES['stdimg']['tmp_name'];

  move_uploaded_file($tempname,"../assests/data-img/$stdimage");


  $query= "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `address` = '$address', `contact` = '$contact', `class` = '$class', `image` = '$stdimage' WHERE `id` = $id;";

  $run = mysqli_query($conn,$query);
  // echo $insertQuery;

  if($run ==  true)
  {
      ?>
      <script>
      alert("Data Updated Successfully...");
      window.open('update-student-form.php?sid=<?php echo $id; ?>', '_self');
      </script>
    <?php
      
  }


?>