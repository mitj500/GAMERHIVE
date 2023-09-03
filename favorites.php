<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="events.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="" href="img/android-chrome-512x512.png">
    <title> </title>
</head>
<body>
  <?php
  session_start();
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

  if(isset($_SESSION["username"]))
  {
    $user = $_SESSION["username"];
    $sql = "SELECT * FROM favourites WHERE username='$user'";
    $result = $conn->query($sql);
    $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
?>
  
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.html"><img src="img/logo_without_bg.png" width="200px"></a>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                <a href=<?php if (isset($_SESSION["username"])) {echo 'logout.php';} else {echo 'login.html';} ?> style='color: whitesmoke;'><span class=profile-text><?php if (isset($_SESSION["username"])) {echo $_SESSION["username"];} else {echo 'Login';} ?></span></a>
                </div>
            </div>
        </div>
    </div>
    <!--Side Bar-->
    <!--Side Bar-->
    <div class="sidebar">
        <a href="index.php" class="nav-link">
            <i class='bx bxs-home-alt-2' ></i>
            <span class="nav-link-title">Home</span>
        </a>   
        <a href="favorites.php" class="nav-link">
            <i class='bx bxs-heart'></i>
            <span class="nav-link-title">Favourites</span>
        </a>
        <a href="eventsfinal.php" class="nav-link">
            <i class='bx bxs-news'></i>
            <span class="nav-link-title">Events</span>
        </a>
        <a href="Top100.php" class="nav-link">
            <i class='bx bxs-trophy'></i>
            <span class="nav-link-title">Top 50</span>
        </a>
        <a href="aboutus.php" class="nav-link">
        <i class='bx bxs-game'></i>
            <span class="nav-link-title">About Us</span>
        </a>
    </div>
<html>
  <head>
    <title>favourites</title>
    <style>
      /* define CSS styles for the page */
      body {
        background-color: #fee12b;
        color: #333;
        font-family: sans-serif;
        line-height: 1.5;
        margin: 0;
        padding: 0;
      }

      /* define CSS styles for the card container */
      .card-container {
        max-width: 700px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      }

      /* define CSS styles for the card */
      .card {
        border: 1px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        padding: 16px;
        border-radius: 8px;
        background-color:  #f4b906;
        transition: box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out;
      }

      /* define CSS styles for the card hover effect */
      .card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        transform: translateY(-5px);
      }

      /* define a CSS style for the heart button */
      .heartButton {
        font-size: 24px;
        color: #333;
        transition: color 0.2s ease-in-out;
      }

      /* define a CSS style for the heart button when it is clicked */
      .heartButton.clicked {
        color: red;
      }

      /* define CSS styles for the card title and content */
      h2,
      p {
        margin: 0;
        padding: 0;
      }

      /* define CSS styles for the card title */
      h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
      }

      /* define CSS styles for the card content */
      p {
        font-size: 16px;
        margin-bottom: 10px;
      }
      .image-box {
        width: 100%;
        height: 200px;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
        background-color: #ffffff;
      }

      .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .card-content {
        display: flex;
        width: 100%;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Favourites</h1>
      </header>
      <div class=card-container>
        <div class=card-content>
          <?php
      $favindex = 0;
      
      foreach($json as $gameid)
      {
        $gameid = $json[$favindex]['id'];
      $gamename = $json[$favindex]['favitem'];
      $sql = "SELECT * FROM game WHERE id=$gameid";
      $result = $conn->query($sql);
      $json2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
      $imgsrc = $json2[0]['gameimage'];
      echo "
      <div class=card>
        <div class=image-box>
        <img
        src='$imgsrc'
        >
        </div>
          <h2>$gamename</h2>
          </div>
          <br>
          ";
          $favindex++;
        }
        ?>
        
      </div>
      </div>
    <script>
      // add event listener to the heart buttons
      function heart(button) {
        button.classList.toggle("clicked");
      }
    </script>
  </body>
</html>
