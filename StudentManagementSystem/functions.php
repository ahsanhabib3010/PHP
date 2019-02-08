<?php

function showDetails($class,$rollno)
{
    include('dbcon.php');
    
    $query = "SELECT * FROM `student` WHERE `class` = '$class' AND `rollno` = '$rollno';";

    $run = mysqli_query($conn,$query);


    if(mysqli_num_rows($run)>0)
    {

        $data = mysqli_fetch_assoc($run);

        ?>
            <table class="indexpagetable">
                <tr>
                    <th colspan="3">STUDENT DETAILS</th>
                </tr>
                <tr>
                    <td rowspan="5"> <img src="assets/data-img/<?php echo $data['image']; ?>" alt="Student Image" style="max-height:150px; max-width:120px;" > </td>
                    <th>Roll No.</th>
                    <td><?php echo $data['rollno']; ?></td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?php echo $data['address']; ?></td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td><?php echo $data['contact']; ?></td>
                </tr>
                <tr>
                    <th>Class:</th>
                    <td><?php echo $data['class']; ?></td>
                </tr>
            </table>



        <?php




    }
    else
    {
        echo "<script>alert('No Record Found...!!!');</script>";
    }

}


?>