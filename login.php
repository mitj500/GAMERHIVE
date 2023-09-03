<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gamerhive";

// Create connection
$conn = new mysqli('localhost','root','',$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
$json = mysqli_fetch_all($result, MYSQLI_ASSOC);

if ($result->num_rows > 0) {

        echo "Registration successfully...";
		header("Location:index.html");
        echo"<script>alert('Welcome to GamerHive')</script>";
        echo"<script>window.open('index.html')</script>";
} else {
    echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
    
}
?>