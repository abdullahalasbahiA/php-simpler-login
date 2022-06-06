<?php

if(isset($_POST['submit'])){

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

require_once "dbh.inc.php";
require_once "functions.inc.php";

//emptylogin
if(emptyLoginFields($uid, $pwd) === true){
    header("location: ../login.php?error=emptyfields");
    exit();
}
//wrongdata
if(wrongLoginData($conn, $uid, $pwd) === true){
    header("location: ../login.php?error=wronglogindata");
    exit();
}

//loginUser
loginUser($conn, $uid, $pwd);
header("location: ../index.php");
exit();

}else{
    header("location: ../login.php");
    exit();
}