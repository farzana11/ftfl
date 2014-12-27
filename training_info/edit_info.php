<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from traininginfo WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>


<form action="update_info.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Training Title</label><span style="color:red">*</span>
    <input type="text" name="training" value="<?php echo $row['training'];?>"/></br>


    <label>Training Description</label><span style="color:red">*</span>
    <input type="text" name="description" value="<?php echo $row['description'];?>"/></br>

    <label>Institute</label><span style="color:red">*</span>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>"/></br>

    <label>Address</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>"/></br>

    <label>Training Year</label><span style="color:red">*</span>
    <input type="text" name="t_year" value="<?php echo $row['t_year'];?>"/></br>

    <label>Duration</label><span style="color:red">*</span>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>"/></br>

    <h4>Course Details</h4>
    <hr>

    <label>Start date</label>
    <input type="text" name="start" value="<?php echo $row['start'];?>"/></br>

    <label>End date</label>
    <input type="text" name="end_date" value="<?php echo $row['end_date'];?>"/></br>

    <label>Course Title</label>
    <input type="text" name="course" value="<?php echo $row['course'];?>"/></br>

    <label>Trainer Detail</label>
    <textarea rows="3" cols="50" name="trainer"><?php echo $row['trainer'];?></textarea></br>


    <button type="submit" align="right">Submit</button>



    <button type="submit" align="right">Update</button>

</form>