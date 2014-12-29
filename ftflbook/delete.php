<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query = "DELETE FROM `ftfl`.`registration` WHERE `registration`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');