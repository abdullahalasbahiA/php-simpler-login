<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website name</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php
    if(isset($_SESSION['userId'])){
        echo 
        "<span>Welcome".$_SESSION['userUid']."</span>
        <a href='profile.php'>profile</a>
        <a href='includes/logout.inc.php'>logout</a>";
    } else {
        echo 
        "<a href='login.php'>login</a>
        <a href='signup.php'>signup</a>";
    }

?>