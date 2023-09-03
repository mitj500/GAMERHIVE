<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="style.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="" href="img/android-chrome-512x512.png">
    <title>GamerHive</title>
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

if(isset ($_POST['email'], $_POST['password']))
{
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);
$json = mysqli_fetch_all($result, MYSQLI_ASSOC);
$_SESSION["username"] = $json[0]['username'];

}


?>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php"><img src="img/logo_without_bg.png" style="width: 200px;"></a>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <a href=<?php if (isset($_SESSION["username"])) {echo 'logout.php';} else {echo 'login.html';} ?> style='color: whitesmoke;'><span class=profile-text><?php if (isset($_SESSION["username"])) {echo $_SESSION["username"];} else {echo 'Login';} ?></span></a>
                </div>
            </div>
        </div>
    </div>
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
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/tetris1.png');">
                <p class="featured-desc"></p>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <a href="gamepage/gowr.html"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/gowr.jpg" alt="">
                            <span class="movie-list-item-title">
                                 <span style="color: azure;">God of War Ragnarok <br></span> 
                              <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/fifa23.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Fifa23.png" alt="">
                            <span class="movie-list-item-title">
                                <span style="color: azure;">Fifa 23</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a> 
                        <a href="gamepage/AssCreedMirage.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/AssassinsCreedMirage.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Assassins Creed Mirage</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/AtomicHeart.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/ATOMIC HEART.JPG" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Atomic Heart</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/DeadSpace.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/ds3.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Dead Space 3</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/HIFI RUSH.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Hifi Rush</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/HogwartsLegacy.png" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Hogwarts Legacy</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">COMING SOON</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <a href="gamepage/starwars.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/star wars  jedi survivor.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title"> Star Wars Jedi Survivor</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/re4.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/re4.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Resident Evil 4</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/sf6.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/STREET FIGHTER  6.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Street Fighter 6</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/redfall.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/redfall.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Redfall</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/sucidesquad.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Sucide Squad.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Suicide-Squad</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/open-graph.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Diabola 4</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(83, 124, 79, 0), #151515), url('img/pacman2.png');">
                <p class="featured-desc"></p>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">MOST ANTICIPATED</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <a href="gamepage/suicidesquad.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Sucide Squad.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Suicide-Squad</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/re4.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/re4.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Resident Evil 4</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/aw2.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/aw2.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Alan Wake II</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/Starfield.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/starfield.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Starfield</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/Diablo4.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/WhatsApp Image 2023-03-13 at 11.56.35 PM (3).jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Diabola 4</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/WhatsApp Image 2023-03-13 at 11.56.35 PM.jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Final Fantasy XVI</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/star wars  jedi survivor.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Star Wars Jedi Survivor</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title"> FAN FAVOURITES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <a href="gamepage/GoW2018.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="iMG/WhatsApp Image 2023-03-13 at 11.29.28 PM.jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">God of War (2018)</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/RDR2.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/rdr2.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Red Dead Redemption 2</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/CoDWarzone2.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/WhatsApp Image 2023-03-13 at 11.31.28 PM.jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Call of Duty Warzone 2.0</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/TLOU1.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/WhatsApp Image 2023-03-13 at 11.36.16 PM.jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">The Last of Us Part 1</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <a href="gamepage/ZeldaBOTW.php"><div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/zelda botw.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">The Legend of Zelda</span>
                            <p class="movie-list-item-desc"></p>
                        </div></a>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/WhatsApp Image 2023-03-13 at 11.37.08 PM.jpeg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Fortnite</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Skyrim.jpg" alt="">
                            <span style="color: azure;"class="movie-list-item-title">Elder scrolls V:Skyrim</span>
                            <p class="movie-list-item-desc"></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
        
    </div>
    <script src="app.js"></script>
</body>

</html>