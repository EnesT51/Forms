<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/style.css">
   <title>Form</title>
</head>
<body>


<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = htmlspecialchars($_POST["fname"]);
      $email = htmlspecialchars($_POST["Email"]);
   }
   
?>
   <div id="FormDiv">
      <h1>Welkom: <?php echo $name; ?></h1>
      <h2>Je email addres is: <?php echo $email ?></h2>
   
   </div>

</body>
</html>