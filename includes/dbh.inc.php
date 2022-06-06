<?php

$conn = mysqli_connect("localhost", "root", "", "simple-login");

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}