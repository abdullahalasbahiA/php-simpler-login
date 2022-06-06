<?php
include_once "header.php";
?>




<h3>index page</h3>
<?php



    if(isset($_SESSION['userId'])){
        echo "<h1>".$_SESSION['userUid']."</h1>";
    
        echo "<hr />";

        

    
    }

?>

<div class="items">
    <form>
        <input type="text" name="task" placeholder="Task..." />
        <button type="button">add</button>
    </form>
    <div class="task">
        <div class="text">Cook</div>
        <div class="close-btn"></div>
    </div>
    <div class="task">
        <div class="text done">code to do list with php</div>
        <div class="close-btn"></div>
    </div>
    <div class="task">
        <div class="text">publish it online</div>
        <div class="close-btn"></div>
    </div>
</div>



<?php 
include_once "footer.php";
?>