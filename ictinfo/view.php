<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from ict WHERE id = $id";

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
            <td>Category</td>
            <td><?php echo $row['category'] ?></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><?php echo $row['description'] ?></td>
        </tr>
        <tr>
            <td>Activities</td>
            <td><?php echo $row['activities'] ?></td>
        </tr>


    <?php
    }

    ?>

</table>

<a href="list.php">Go to Home</a>