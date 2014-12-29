<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from registration WHERE id = $id";

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
            <td> First Name</td>
            <td><?php echo $row['f_name'] ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $row['l_name'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row['email'] ?></td>
        </tr>
        <tr>
            <td>Re-enter email</td>
            <td><?php echo $row['r_email'] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo $row['password'] ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $row['gender'] ?></td>
        </tr>
        <tr>
            <td>Date of Birthday</td>
            <td><?php echo $row['date_of_bd'] ?></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><?php echo $row['comment'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list.php">Go to Home</a>