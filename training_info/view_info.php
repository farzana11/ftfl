<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from traininginfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//print_r($row);
?>
<h4 align="center" style="color:darkturquoise">View Information</h4>
<hr>

<table border="1" width="60%" align="center" >

    <tr style="color:blue">
        <td>Field Name</td>
        <td>Description</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>

        <tr>
            <td>Training title</td>
            <td><?php echo $row['training'] ?></td>
        </tr>
        <tr>
            <td>Training Description</td>
            <td><?php echo $row['description'] ?></td>
        </tr>
        <tr>
            <td>Institute</td>
            <td><?php echo $row['institute'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $row['address'] ?></td>
        </tr>
        <tr>
            <td>Training</td>
            <td><?php echo $row['t_year'] ?></td>
        </tr>
        <tr>
            <td>Duration</td>
            <td><?php echo $row['duration'] ?></td>
        </tr>
        <tr>
            <td>Start Date</td>
            <td><?php echo $row['start'] ?></td>
        </tr>
        <tr>
            <td>End date</td>
            <td><?php echo $row['end_date'] ?></td>
        </tr>
        <tr>
            <td>Course Title</td>
            <td><?php echo $row['course'] ?></td>
        </tr>
        <tr>
            <td>Trainer Detail</td>
            <td><?php echo $row['trainer'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list_info.php">Go to Home</a>