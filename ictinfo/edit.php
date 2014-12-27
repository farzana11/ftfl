<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from ict WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<h4 align="center"  style="color:darkturquoise">Edit Academic Information</h4>
<hr>

<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Level of Education</label>
    <select name="category">
        <option <?php if($row['category']=='networking') echo 'selected'?> value="networking">networking</option>
        <option <?php if($row['category']=='data communication') echo 'selected'?>  value="data communication">data communication</option>
        <option <?php if($row['category']=='programming') echo 'selected'?>  value="programming">programming</option>
        <option <?php if($row['category']=='IT') echo 'selected'?>  value="IT">IT</option>
    </select></br>

    <label>Description</label><span style="color:red">*</span>
    <input type="text" name="description" value="<?php echo $row['description'];?>" /></br>

    <label>Activities</label><span style="color:red">*</span>
    <input type="text" name="activities" value="<?php echo $row['activities'];?>"/></br>






    <button type="submit" align="right">Update</button>

</form>
<a href="list.php">cancel</a>