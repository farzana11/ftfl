<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

echo '<pre>' ;
print_r($_POST);
echo '</pre>' ;

//$hobby=implode(',',$_POST["hobby"]);
//echo ($hobby)

$hobby = '';

if(isset($_POST['hobby_reading']) && !empty($_POST['hobby_reading'])){
    $hobby = $hobby . $_POST['hobby_reading'];
}

if(isset($_POST['hobby_gardening']) && !empty($_POST['hobby_gardening'])){
    $hobby = $hobby .','. $_POST['hobby_gardening'];
}
if(isset($_POST['hobby_travelling']) && !empty($_POST['hobby_travelling'])) {
    $hobby = $hobby .','. $_POST['hobby_travelling'];
}
    if(isset($_POST['hobby_fishing']) && !empty($_POST['hobby_fishing'])) {
        $hobby = $hobby .','. $_POST['hobby_fishing'];
    }
        echo $hobby;
