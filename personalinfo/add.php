<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");

$query="INSERT INTO `ftfl`.`profile` (
                                        `name` ,
                                        `father` ,
                                        `mother` ,
                                        `gender` ,
                                        `religion` ,
                                        `date_of_birth` ,
                                        `national_id` ,
                                        `birth_reg` ,
                                        `passport_num` ,
                                        `ssc_board` ,
                                        `ssc_roll` ,
                                        `hsc_board` ,
                                        `hsc_roll` ,
                                        `laptop` ,
                                        `exam_center` ,
                                        `mobile` ,
                                        `home_phone` ,
                                        `emergency_contact` ,
                                        `email` ,
                                        `alternate_email` ,
                                        `current_location` ,
                                        `present_address` ,
                                        `parmanent_address`
                                        )
                                        VALUES (
                                             '".$_POST['name']."', '".$_POST['father']."', '".$_POST['mother']."',
                                             '".$_POST['gender']."', '".$_POST['religion']."', '".$_POST['bday']."',
                                             '".$_POST['national_id']."', '".$_POST['birth_reg']."', '".$_POST['passport_num']."',
                                             '".$_POST['sscboard']."', '".$_POST['ssc_roll']."',
                                             '".$_POST['hscboard']."', '".$_POST['hsc_roll']."', '".$_POST['laptop']."',
                                             '".$_POST['center']."', '".$_POST['mobile']."',
                                             '".$_POST['home_phone']."', '".$_POST['emergency']."', '".$_POST['email']."',
                                             '".$_POST['alt_email']."', '".$_POST['current_location']."', '".$_POST['present_address']."', '".$_POST['permanent_address']."'
                                        );";

if(mysqli_query($link, $query))
    echo "data input";
else
    die("e: ".mysqli_error($link));

//mysqli_query($link, $query);

header('location:list.php');

