<?php
    include_once 'header.php';
?>

    <div class="form">
        <h1>REGISTRATION</h1>
   <form action="includes/signup.inc.php" method="post">
   
        <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="email" placeholder="Email">
        <input type="text" id="fname" name="uid" placeholder="Username">

        
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat password">
    
        <button name="submit" type="submit">Register</button>
  </form>
  <?php
    if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields! </div>';
        } elseif
        ($_GET["error"] == "invalidUid"){
            echo '<div class="error">Invalid Username! </div>';
        } elseif
        ($_GET["error"] == "invalidEmail"){
            echo '<div class="error">Invalid Email!</div>';
        }  else if
        ($_GET["error"] == "pwdMatch"){
            echo '<div class="error">Password not matching!</div>';
        } else if
        ($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong!</div>';
        } else if
        ($_GET["error"] == "none"){
            echo '<div class="error">Account created</div>';
        } else if
        ($_GET["error"] == "usernametaken"){
            echo '<div class="error">Username / Email already in used!</div>';
        }
}
  ?>



  <p style="font-weight:bold;">Already have an account? <a href="login.php" style="color:red;font-weight:bold;">Login.</a></p>
  </div>

<?php
    include_once 'footer.php';
?>