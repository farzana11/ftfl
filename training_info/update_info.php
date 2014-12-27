<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query ="UPDATE `ftfl`. `traininginfo` SET `training`='".$_POST['training']."',
`description`='".$_POST['description']."',`institute`='".$_POST['institute']."',`address`='".$_POST['address']."',
`t_year`='".$_POST['t_year']."',`duration`='".$_POST['duration']."',
`start`='".$_POST['start']."',`end_date`='".$_POST['end_date']."',`course`='".$_POST['course']."',`trainer`='".$_POST['trainer']."' WHERE `traininginfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_info.php');