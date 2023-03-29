<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/style.css">
   <title>Forms</title>
   
   <style>
      .error{color: red;}
   </style>
</head>
<body>

   <div id="FormDiv">

      <?php
      
         $name = $email = "";
         $nameempty = $emailEmpty = "";

         if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["fname"])){
               $nameempty = "Name is Required";
            }else{
               $name = Data($_POST["fname"]);
            }
            if(empty($_POST["Email"])){
               $emailEmpty = "Email is Required";
            }else{
               $email = Data($_POST["Email"]);
            }
         }
         
         function Data($data){

            $data = htmlspecialchars($data);

            return $data;
         }
      ?>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
         <label for="fname">First name: </label><br>
         <input type="text" id="fname" name="fname" placeholder="First name"><br>
         <span class="error">* <?php echo $nameempty ?> </span>
         <br><br>
         <label for="lname">Email: </label><br>
         <input type="email" id="email" name="Email" placeholder="Email"><br><br>
         <span class="error">* <?php echo $emailEmpty ?> </span>
         <br><br>
         <button type="submit">Submit</button>
      </form>

         <?php
            echo"<h2> Dit zijn de ingevoerde gegevens</h2>";
            echo "Welcome: " . $name . "<br>";
            echo "Dit is je Email: ". $email . "<br>";
         ?>
         
   </div>   
</body>
</html>