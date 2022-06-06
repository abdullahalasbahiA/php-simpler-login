<?php

if(isset($_POST['submit'])){

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwdRepeat = $_POST['pwdRepeat'];

require_once "dbh.inc.php";
require_once "functions.inc.php";

//error handlers

if(emptyFields($uid, $pwd, $pwdRepeat) === true){
    header("location: ../signup.php?error=emptyfields");
    exit();
}

if(pwdDontMatch($pwd, $pwdRepeat) === true){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit;    
}

if(uidExist($conn, $uid) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit;
}

//success create user
createUser($conn, $uid, $pwd);

} else {
    header("location: ../signup.php");
    exit;
}