<?php
$host = 'localhost';
$user = 'fundexuser';
$password = 'fundexpassword';
$db = 'fundex';

$link = mysqli_connect('$host','$user','$password','$db');
if(!$link){
    die('could  not connect');
}
?>