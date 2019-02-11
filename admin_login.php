<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>LightVend</title>
  

      <link rel="stylesheet" href="css/mystyle.css">
      
</head>




  

<body>
 
<?php 
   
    session_start();
   $_SESSION['check_login'] = "";



?>
  <div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="account_login.php" method="post">
  <h1 id="litheader">JPEA Enterprise</h1>
  <div class="inset">

<center>
   <a style="color: red;">
  <?php 

          if(isset($_SESSION['attempt_counter'])){
            echo "You have ".$_SESSION['attempt_counter']." tries left";
          }
    ?> 
     </a>
     </center>
    <p>

<br>

      <input type="text" name="username"  placeholder="Username" required>
    </p>
    <p>
      <input type="password" name="password"  placeholder="Password" required>
    </p>
<!--     <center> <a class="style" href="admin_registration.php">Sign up ?</a></center> -->
   
  <p class="p-container">
    <input type="submit" name="Login" id="go" value="Login">

  </p>

</form>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>










</body>
</html>
