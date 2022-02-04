<?php
if(isset($_GET['name'])){
  $name = htmlentities($_GET['name']);
  $message = "Hello my name is ";
   echo $message; 
   echo $name . "<br>";
    
}
if (!empty($name)) {
} else {
    echo "Missing Data! Please Fill out the form below!";
}

if(isset($_GET['age'])){
 $age = htmlentities($_GET['age']);
 $message = "My age is "; 
 echo $message;
 echo $age . "<br>";
}  

if ($age > 17) {
   echo "I am old enough to vote in the United States!";
} elseif ($age < "17"){
    echo "I am not old enough to vote in the United States!";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="assignment_1.php">
        <div> 
            <label>First & Last Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Age</label><br>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>