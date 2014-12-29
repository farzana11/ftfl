<?php

//print_r($_POST);




//echo $date_of_bd;


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$r_email = $_POST['r_email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$date_of_bd = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
$comment = $_POST['comment'];


$link = mysqli_connect("localhost", "root", "lict@2", "ftfl");

$query = "INSERT INTO `ftfl`.`registration`(`f_name`, `l_name`, `email`,`r_email`, `password`, `gender`, `date_of_bd`, `comment`)
                                    VALUES ('$f_name', '$l_name', '$email','$r_email', '$password', '$gender', '$date_of_bd', '$comment')";

//echo $query;
if(mysqli_query($link, $query))
    echo "data input";
else
    die("e: ".mysqli_error($link));
//mysqli_query($link, $query);

//mysqli_query($link, $query);

header('location:list.php');

?>

