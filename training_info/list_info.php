<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from traininginfo";

$result = mysqli_query($link, $query);


?>

<table border="1" width="100%">

    <tr>
        <td>ID</td>
        <td>Training Title</td>
        <td>Training Description</td>
        <td>Institute</td>
        <td>Address</td>
        <td>Training Year</td>
        <td>Duration</td>
        <td>Start date</td>
        <td>End date</td>
        <td>Course Title</td>
        <td>Trainer detail</td>
        <td>Action</td>

    </tr>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['training']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['t_year']?></td>

            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['start']?></td>
            <td><?php echo $row['end_date']?></td>
            <td><?php echo $row['course']?></td>
            <td><?php echo $row['trainer']?></td>

            <td> <a href="view_info.php?id=<?php echo $row['id']?>">View</a> |<a href="edit_info.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete_info.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>


</table>
<a href="create_info.html">Create New</a>