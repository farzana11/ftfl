<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

echo '<pre>' ;
print_r($_POST);
echo '</pre>' ;




$hobby = '';

if(array_key_exists('hobby_reading',$_POST)&& !empty($_POST['hobby_reading'])){
    $hobby = $hobby . $_POST['hobby_reading'];
}

if(array_key_exists('hobby_gardening',$_POST) && !empty($_POST['hobby_gardening'])){
    $hobby = $hobby .','. $_POST['hobby_gardening'];
}
if(array_key_exists('hobby_travelling',$_POST) && !empty($_POST['hobby_travelling'])) {
    $hobby = $hobby .','. $_POST['hobby_travelling'];
}
if(array_key_exists('hobby_fishing',$_POST) && !empty($_POST['hobby_fishing'])) {
    $hobby = $hobby .','. $_POST['hobby_fishing'];
}
echo $hobby;
echo '<br />';

$food=implode(',',$_POST['food']);
echo $food ;

echo '<br />';

$city=implode(',',$_POST['city']);
echo $city ;