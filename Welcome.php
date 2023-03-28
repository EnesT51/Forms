<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style/style.css">
   <title>Forms</title>

</head>
<body>

   <div id="FormDiv">
      <form method="post" action="WelcomeGEt.php">
         <label for="fname">First name: </label><br>
         <input type="text" id="fname" name="fname" placeholder="First name"><br>
         <label for="lname">Email: </label><br>
         <input type="email" id="email" name="Email" placeholder="Email"><br><br>
         <input type="submit" value="submit">
      </form>
   </div>
</body>
</html>