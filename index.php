<?php
    include_once 'header.php';
?>
    <h1>  <?php
    if (isset($_SESSION["username"])){
        echo 'Hello ' .$_SESSION["username"]  ;
    }else
       // echo 'user!';
    ?></h1>
    

<?php
    include_once 'footer.php';
?>