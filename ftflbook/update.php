<?php


$id = $_POST['id'];

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$r_email = $_POST['r_email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$date_of_bd = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
$comment = $_POST['comment'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "UPDATE `ftfl`.`registration` SET `f_name`='".$f_name."',`l_name`='".$l_name."',
`email`='".$email."',`r_email`='".$r_email."',`password`='".$password."',`gender`='".$gender."',`date_of_bd`='".$date_of_bd."',`comment`='".$comment."' WHERE `registration`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');
