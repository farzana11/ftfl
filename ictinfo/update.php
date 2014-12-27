<?php

$id = $_POST['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query ="UPDATE `ftfl`. `ict` SET `category`='".$_POST['category']."',
`description`='".$_POST['description']."',`activities`='".$_POST['activities']."' WHERE `ict`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');