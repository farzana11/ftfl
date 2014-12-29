<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "select * from registration WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);


?>
<form action="update.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />


    <label>First Name</label><span>*</span>
    <input type="text" name="f_name" value="<?php echo $row['f_name'];?>" /></br>

    <label>Last Name</label><span>*</span>
    <input type="text" name="l_name" value="<?php echo $row['l_name'];?>"/></br>

    <label>Email</label><span>*</span>
    <input type="email" name="email" value="<?php echo $row['email'];?>"/></br>

    <label>Re-enter Email</label><span>*</span>
    <input type="email" name="r_email" value="<?php echo $row['r_email'];?>"/></br>


    <label>Password</label><span>*</span>
    <input type="password" name="password" value="<?php echo $row['password'];?>"/></br>


    <label>Gender</label>
    <input type="radio" name="gender"  <?php if($row['gender']=="male") echo "checked";?> value="male"/> male
    <input type="radio" name="gender"  <?php if($row['gender']=="female") echo "checked";?> value="female"/> female</br>

    <?php
    $date = explode('-', $row['date_of_bd']);
    list($year,$month,$day)=$date;
    ?>

    <label>Date of Birth</label><span>*</span>

    <select name="year">
        <option> - Year - </option>
        <option <?php if ($year =='2020') echo 'selected'?> value="2020">2020</option>
        <option <?php if ($year =='2019') echo 'selected'?> value="2019">2019</option>
        <option <?php if($year=='2018') echo 'selected'?> value="2018">2018</option>
        <option <?php if($year=='2017') echo 'selected'?> value="2017">2017</option>
        <option <?php if($year=='2016') echo 'selected'?> value="2016">2016</option>
        <option <?php if($year=='2015') echo 'selected'?> value="2015">2015</option>
        <option <?php if($year=='2014') echo 'selected'?> value="2014">2014</option>
        <option <?php if($year=='2013') echo 'selected'?> value="2013">2013</option>
        <option <?php if($year=='2012') echo 'selected'?> value="2012">2012</option>
        <option <?php if($year=='2011') echo 'selected'?> value="2011">2011</option>
        <option <?php if($year=='2010') echo 'selected'?> value="2010">2010</option>
        <option <?php if($year=='2009') echo 'selected'?> value="2009">2009</option>
        <option <?php if($year=='2008') echo 'selected'?> value="2008">2008</option>
        <option <?php if($year=='2007') echo 'selected'?> value="2007">2007</option>
        <option <?php if($year=='2006') echo 'selected'?> value="2006">2006</option>
        <option <?php if($year=='2005') echo 'selected'?> value="2005">2005</option>
        <option <?php if($year=='2004') echo 'selected'?> value="2004">2004</option>
        <option <?php if($year=='2003') echo 'selected'?> value="2003">2003</option>
        <option <?php if($year=='2002') echo 'selected'?> value="2002">2001</option>
        <option <?php if($year=='2001') echo 'selected'?> value="2001">2001</option>
        <option <?php if($year=='2000') echo 'selected'?> value="2000">2000</option>

    </select>
    <select name="month">
        <option> - Month - </option>
        <option <?php if($month=='01') echo 'selected'?> value="01">January</option>
        <option <?php if($month=='02') echo 'selected'?> value="02">February</option>
        <option <?php if($month=='03') echo 'selected'?> value="03">March</option>
        <option <?php if($month=='04') echo 'selected'?>value="04">April</option>
        <option <?php if($month=='05') echo 'selected'?> value="05">May</option>
        <option <?php if($month=='06') echo 'selected'?> value="06">June</option>
        <option <?php if($month=='07') echo 'selected'?> value="07">July</option>
        <option <?php if($month=='08') echo 'selected'?> value="08">August</option>
        <option <?php if($month=='09') echo 'selected'?> value="09">September</option>
        <option <?php if($month=='10') echo 'selected'?> value="10">October</option>
        <option <?php if($month=='11') echo 'selected'?> value="11">November</option>
        <option <?php if($month=='12') echo 'selected'?> value="12">December</option>
    </select>

    <select name="day">
        <option> - Day - </option>
        <option <?php if($day=='1') echo 'selected'?> value="1">1</option>
        <option <?php if($day=='2') echo 'selected'?> value="2">2</option>
        <option <?php if($day=='3') echo 'selected'?> value="3">3</option>
        <option <?php if($day=='4') echo 'selected'?> value="4">4</option>
        <option <?php if($day=='5') echo 'selected'?> value="5">5</option>
        <option <?php if($day=='6') echo 'selected'?> value="6">6</option>
        <option <?php if($day=='7') echo 'selected'?> value="7">7</option>
        <option <?php if($day=='8') echo 'selected'?> value="8">8</option>
        <option <?php if($day=='9') echo 'selected'?> value="9">9</option>
        <option <?php if($day=='10') echo 'selected'?> value="10">10</option>
        <option <?php if($day=='11') echo 'selected'?> value="11">11</option>
        <option <?php if($day=='12') echo 'selected'?> value="12">12</option>
        <option <?php if($day=='13') echo 'selected'?> value="13">13</option>
        <option <?php if($day=='14') echo 'selected'?> value="14">14</option>
        <option <?php if($day=='15') echo 'selected'?> value="15">15</option>
        <option <?php if($day=='16') echo 'selected'?> value="16">16</option>
        <option <?php if($day=='17') echo 'selected'?> value="17">17</option>
        <option <?php if($day=='18') echo 'selected'?> value="18">18</option>
        <option <?php if($day=='19') echo 'selected'?> value="19">19</option>
        <option <?php if($day=='20') echo 'selected'?> value="20">20</option>
        <option <?php if($day=='21') echo 'selected'?> value="21">21</option>
        <option <?php if($day=='22') echo 'selected'?> value="22">22</option>
        <option <?php if($day=='23') echo 'selected'?> value="23">23</option>
        <option <?php if($day=='24') echo 'selected'?> value="24">24</option>
        <option <?php if($day=='25') echo 'selected'?> value="25">25</option>
        <option <?php if($day=='26') echo 'selected'?> value="26">26</option>
        <option <?php if($day=='27') echo 'selected'?> value="27">27</option>
        <option <?php if($day=='28') echo 'selected'?> value="28">28</option>
        <option <?php if($day=='29') echo 'selected'?> value="29">29</option>
        <option <?php if($day=='30') echo 'selected'?> value="30">30</option>
        <option <?php if($day=='31') echo 'selected'?> value="31">31</option>
    </select>

</br>

    <label>Comment</label>
    <textarea rows="3" cols="50" name="comment"><?php echo $row['comment'];?></textarea></br>


    <button type="submit" align="right">Update</button>

</form>
<a href="list.php">cancel</a>