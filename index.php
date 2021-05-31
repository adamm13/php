<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h2>PHP Tutorial</h2>
<body>

<?php

  $myvar = "This is my variable";
  $number2 = 5;
  $number3 = 3;
  echo $myvar;
  $sum = $number2 + $number3;
  echo $sum;
  echo "Hello World"; //outputs to screen but not on source

  $name = "Adam";

  echo "Hello, " . $name; // use dot to concatinate 

  $loggedin = false;

  if ($loggedin == true){ // if statement for operators. 
    echo "You are logged in";
  } else {
    echo "Please log in";
  }

  // array
  $people = array("Adam", "bob", "egg");

  $numbers = array(5, 7, 8);
  $sum = 0;

  //print_r($people);
  echo $people[2];
  
  //Loop
  foreach($people as $person) {
    echo $person . " ";
  }

  //loop to add numbers
  foreach($numbers as $number) {
    $sum = $sum + $number;
  }
  echo $sum;


?>

<form action="process.php" method="post">
  Enter your name:<input name="name" type="text">
  <input type="submit">
</form>
  
</body>
</html>