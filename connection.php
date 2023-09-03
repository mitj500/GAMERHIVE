<?php
// Database configuration
$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'gamerhive';


// Connect to the database
$conn = mysqli_connect($servername, $username,$password,$dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the user details
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$mobile = $_POST['phone'];
$dob = $_POST['dob'];

// Hash the password

//to check the login

function check_login($con)

{

 if(isset($_SESSION['user_id']))

{


    $id = $_SESSION['user_id'];

    $query = "select * from users where user_id = '$id' limit 1";


    $result = mysqli_query($con,$query);

    if($result && mysqli_num_rows($result) > 0)

    {


      $user_data = mysqli_fetch_assoc($result);

      return $user_data;

    }

  }


  //redirect to login

  header("Location: /index.php");

  die;


}

    // Insert the user into the database
    $sql = "INSERT INTO registration(email, password, username, mobile, DOB) VALUES ('$email', '$password', '$username', '$mobile', '$dob')";

    if (mysqli_query($conn, $sql)) {
        
        echo "Registration successfully...";
		header("Location:login.html");
        echo"<script>alert('Welcome to GamerHive')</script>";
        echo"<script>window.open('login.html')</script>";

   

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
    if (mysqli_affected_rows($conn) > 0) {
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die("Connection failed: " . mysqli_connect_error());
    }
// Close the database connection
mysqli_close($conn);
?>
