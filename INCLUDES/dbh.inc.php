<?php


$servarname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'votingsystem';


$conn = mysqli_connect($servarname,$username,$password,$dbname);


if(mysqli_connect_error()){
    echo "an error occure" . mysqli_connect_error();
}