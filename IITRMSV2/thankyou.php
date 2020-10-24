<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link href="img/logo.ico" rel="icon">
    <title>IIT Roorkee MotorSports | IIT RMS</title>
</head>
<body>
<?php
if(!isset($_POST['submit'])){
  header('Location: '."contactus.php");
}


$servername = "localhost";
$username = "root";
$db= "iitrms"; 

$conn = new mysqli($servername, $username,'', $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_POST["name"];
$email=$_POST["email"];
$query=$_POST["query"];

$sql = "INSERT INTO `users`(`name`,`email`, `query`,) VALUES ('$user',$email','$query')";
?>
     <h2 class="text-center">
                    Congratulations  <?php echo $user ;  header( "refresh:8;url=index.php" );?> !! We've got your query please check your mail for further proceedings...
            </h2>
            <br><br>
            <p class="text-center">You'll be automatically redirected to the home page if not <a href="index.html">click here..</p>
</body>
</html>
