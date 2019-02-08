<?php 
  include('../dbcon.php');

 $id = $_REQUEST['sid'];

  $query= "DELETE FROM `student` WHERE `id` = '$id';";

  $run = mysqli_query($conn,$query);
  // echo $insertQuery;

  if($run ==  true)
  {
      ?>
      <script>
      alert("Data Deleted Successfully...");
      window.open('delete-student.php?sid=<?php echo $id; ?>', '_self');
      </script>
    <?php
      
  }


?>