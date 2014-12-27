<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query="INSERT INTO `ftfl`.`ict` (
                                            `category` ,
                                            `description` ,
                                            `activities`

)
VALUES (
      '".$_POST['category']."', '".$_POST['description']."','".$_POST['activities']."'
);";
#var_dump($query);
if(mysqli_query($link, $query))
    echo "data input";
else
    die("e: ".mysqli_error($link));
//mysqli_query($link, $query);

header('location:list.php');