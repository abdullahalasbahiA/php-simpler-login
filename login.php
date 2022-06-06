<?php
include_once "header.php";
?>
  
  
    <form action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username..."/>
        <input type="password" name="pwd" placeholder="Password"/>
        <button type="submit" name="submit">login</button>
    </form>

<?php 
include_once "footer.php";
?>