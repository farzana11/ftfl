<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query="INSERT INTO `ftfl`.`traininginfo` (
                                            `training` ,
                                            `description` ,
                                            `institute` ,
                                            `address` ,
                                            `t_year` ,
                                            `duration` ,
                                            `start` ,
                                            `end_date`,
                                            `course` ,
                                            `trainer`
)
VALUES (
      '".$_POST['training']."', '".$_POST['description']."','".$_POST['institute']."',
     '".$_POST['address']."', '".$_POST['t_year']."','".$_POST['duration']."','".$_POST['start']."','".$_POST['end_date']."','".$_POST['course']."','".$_POST['trainer']."'
);";

if(mysqli_query($link, $query))
   echo "data input";
else
    die("e: ".mysqli_error($link));

header('location:list_info.php');
?>