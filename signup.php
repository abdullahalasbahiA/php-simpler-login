<?php
include_once "header.php";
?>
  
  
    <form action="includes/signup.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username..."/>
        <input type="password" name="pwd" placeholder="Password"/>
        <input type="password" name="pwdRepeat" placeholder="Repeat password"/>
        <button type="submit" name="submit">Signup</button>
    </form>

    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
                echo "Empty fields!!!";
            }
            else if ($_GET['error'] == "passwordsdontmatch"){
                echo "Passwords dont match!!!";
            }
            else if ($_GET['error'] == "usernametaken"){
                echo "Username taken!!!";
            }
            else if ($_GET['error'] == "stmterror"){
                echo "something wrong Try Again!!!";
            }
            else if ($_GET['error'] == "none"){
                echo "Welcome!!!";
            }
        }
    ?>

<?php 
include_once "footer.php";
?>