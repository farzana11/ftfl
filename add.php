<?php

//print_r($_POST);




//echo $date_of_bd;


$fname = $_POST['fname'];
$hobby = $_POST['hobby'];
$city = $_POST['city'];




$link = mysqli_connect("localhost", "root", "lict@2", "multiple");

$query = "INSERT INTO `multiple`.`multiple`(`fname`, `hobby`, `city` ,`created`, `modified`)
                                    VALUES ('$fname', '$hobby', '$city' , NOW);";


//echo $query;
var_dump ($query);
//if(mysqli_query($link, $query))
  //  echo "data input";
//else
   // die("e: ".mysqli_error($link));
//mysqli_query($link, $query);

//mysqli_query($link, $query);

//header('location:list.php');

?>
