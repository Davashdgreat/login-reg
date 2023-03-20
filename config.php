<?php

$host = 'localhost';
$username = 'root';
$psword = '';
$dbname = 'userport';

$link = mysqli_connect($host, $username, $psword, $dbname);

// if($link){
//   echo '<h2>connection successfull</h2>';
// }else{
//     echo mysqli_error($link).'connection error';
// }