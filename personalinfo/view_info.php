<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from profile WHERE id = $id";

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
            <td>Name</td>
            <td><?php echo $row['name'] ?></td>
        </tr>
        <tr>
            <td>Father</td>
            <td><?php echo $row['father'] ?></td>
        </tr>
        <tr>
            <td>Mother</td>
            <td><?php echo $row['mother'] ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $row['gender'] ?></td>
        </tr>
        <tr>
            <td>Religion</td>
            <td><?php echo $row['religion'] ?></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td><?php echo $row['date_of_birth'] ?></td>
        </tr>
        <tr>
            <td>National ID</td>
            <td><?php echo $row['national_id'] ?></td>
        </tr>
        <tr>
            <td>Birth Reg</td>
            <td><?php echo $row['birth_reg'] ?></td>
        </tr>

        <tr>
            <td>Passport number</td>
            <td><?php echo $row['passport_reg'] ?></td>
        </tr>

        <tr>
            <td>SSC board</td>
            <td><?php echo $row['ssc_board'] ?></td>
        </tr>
        <tr>
            <td>SSC roll</td>
            <td><?php echo $row['ssc_roll'] ?></td>
        </tr>
        <tr>
            <td>HSC board</td>
            <td><?php echo $row['hsc_board'] ?></td>
        </tr>
        <tr>
            <td>HSC roll</td>
            <td><?php echo $row['hsc_roll'] ?></td>
        </tr>
        <tr>
            <td>Laptop</td>
            <td><?php echo $row['laptop'] ?></td>
        </tr>
        <tr>
            <td>Exam center</td>
            <td><?php echo $row['exam_center'] ?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><?php echo $row['mobile'] ?></td>
        </tr>
        <tr>
            <td>home phone</td>
            <td><?php echo $row['home_phone'] ?></td>
        </tr>
        <tr>
            <td>emergency contact</td>
            <td><?php echo $row['emergency_contact'] ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $row['email'] ?></td>
        </tr>
        <tr>
            <td>alternative email</td>
            <td><?php echo $row['alternative_email'] ?></td>
        </tr>
        <tr>
            <td>current location</td>
            <td><?php echo $row['current_location'] ?></td>
        </tr>
        <tr>
            <td>present address</td>
            <td><?php echo $row['present_address'] ?></td>
        </tr>
        <tr>
            <td>SSC roll</td>
            <td><?php echo $row['parmanent_address'] ?></td>
        </tr>
    <?php
    }

    ?>

</table>

<a href="list.php">Go to Home</a>