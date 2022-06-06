<?php

function emptyFields($uid, $pwd, $pwdRepeat){
    if(empty($uid) || empty($pwd) || empty($pwdRepeat)){
        return true;
    } else {
        return false;
    }
}

function pwdDontMatch($pwd, $pwdRepeat){
    if($pwd !== $pwdRepeat){
        return true;
    } else {
        return false;
    }
}

function uidExist($conn, $uid){
    $sql = "SELECT * FROM users WHERE uid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);

    $data = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($data)){
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $uid, $pwd){

    $sql = "INSERT INTO users(uid, pwd) VALUES (?, ?);";
    // mysqli_query($conn, $sql);
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: ../signup.php?error=stmterror');
        exit();
    }
    mysqli_stmt_bind_param($stmt, 'ss', $uid, $pwd);
    mysqli_stmt_execute($stmt);
    header("location: ../index.php");
    loginUser($conn, $uid, $pwd);
    exit();
}

function emptyLoginFields($uid, $pwd){
    if(empty($uid) || empty($pwd)){
        return true;
    } else {
        return false;
    }
}
function wrongLoginData($conn, $uid, $pwd){
    $sql = "SELECT * FROM users WHERE uid = '$uid' && pwd = '$pwd';";
    if($result = mysqli_query($conn, $sql)){
        return $result;
    } else {
        return false;
    }
}

function loginUser($conn, $uid, $pwd){
    $sql = "SELECT * FROM users WHERE uid = ? && pwd = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $pwd);
    mysqli_stmt_execute($stmt);

    $data = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($data)){
        session_start();
        $_SESSION['userId'] = $row['id'];
        $_SESSION['userUid'] = $row['uid'];
    }
    
}