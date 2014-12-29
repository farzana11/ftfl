<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from registration";

$result = mysqli_query($link, $query);


?>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Re-enter-email</td>
        <td>Password</td>
        <td>Gender</td>
        <td>Date of birthday</td>
        <td>Comment</td>

        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['f_name']?></td>
            <td><?php echo $row['l_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['r_email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['date_of_bd']?></td>
            <td><?php echo $row['comment']?></td>

            <td> <a href="view_info.php?id=<?php echo $row['id']?>">View</a> |<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>


<a href="create.html">Go Back</a>
