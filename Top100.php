<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="Top100style.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="" href="img/android-chrome-512x512.png">
    <title>Top 50</title>
</head>
<body>
  <?php
  session_start();
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
            <h1 class="page-title" style="text-align: center;">Top 50 Games</h1>
            <div class="grid" id="grid">

            <!--card-->
            <a href="gamepage/zelda.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Zelda2.png" alt="" style="height: 68%;">
                <h4 class="card__title">The Legend of Zelda: Breath of the Wild</h4><br>  
                <h3 class="card__price">#1</h3>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 3, 2017</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Nintendo Switch, Wii U </p>
                </div>
              </div>
            </div></a>

              <!--.card-->
              <a href="gamepage/mario.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/SMW.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Super Mario World</h4><br><br>
                <p class="card__price">#2</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 21, 1990</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Platformer</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>SNES, GBA</p>
                </div>
              </div>
            </div></a>
            <!--.card-->
            <a href="gamepage/gta4.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/gta4.png" alt="" style="height: 68%;">
                <h4 class="card__title">GTA 4</h4><br><br>
                <p class="card__price">#3</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>April 21, 2008</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3, Xbox 360, Windows,</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/darksouls.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/DarkSouls.png" alt="" style="height: 68%;">
                <h4 class="card__title">Dark Souls</h4><br><br>
                <p class="card__price">#4</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>September 22, 2011</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action, RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3,
                    Xbox 360,
                    Windows,
                    PS4,
                    Xbox One,
                    Nintendo Switch</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/doom.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Doom.png" alt="" style="height: 68%;">
                <h4 class="card__title">DOOM</h4><br><br>
                <p class="card__price">#5</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>December 10, 1993</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>FPS</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>MS-DOS</p>
                </div>
              </div>
            </div></a>

             <!--.card-->
             <a href="gamepage/eldenring.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/EldenRing.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Elden Ring</h4><br><br>
                <p class="card__price">#6</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>Febuary 25, 2022</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action, RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4,PS5,Windows,Xbox One, Xbox Series X/S</p>
                </div>
              </div>
            </div></a>

             <!--.card-->
             <a href="gamepage/TLOU1.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Tlou1a.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">The Last of Us: Part 1</h4><br><br>
                <p class="card__price">#7</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>June 14, 2013</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3,PS4,PS5,Windows</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/gow.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/GoW2018b.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">God of War(2018)</h4><br><br>
                <p class="card__price">#8</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>April 20, 2018</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Hack and Slash</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/RDR2.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/RDR2a.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Red Dead Redemption 2</h4><br>
                <p class="card__price">#9</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>October 26, 2018</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, Xbox One, Windows, Stadia</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/hl2.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/HalfLife2a.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Half-Life 2</h4><br><br>
                <p class="card__price">#10</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 16, 2004</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>FPS</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Windows,
                    Xbox,
                    Xbox 360,
                    PS3,
                    Mac OS X,
                    Linux,
                    Android</p>
                </div>
              </div>
            </div></a> 
            
            <!--.card-->
            <a href="gamepage/discoe.php"><div class="flip-card">
               <div class="flip-card-inner">
                   <div class="flip-card-front">
             <img src="Top100 img/DiscoElysium.jpg" alt="" style="height: 68%;">
               <h4 class="card__title">Disco Elysium: The Final Cut</h4><br><br>
               <p class="card__price">#11</p>
               </div>
               <div class="flip-card-back"><br>
               <p style="font-weight:bold;">Date of release</p>
               <p>October 15, 2019</p><br>
               <p style="font-weight:bold;">Genre</p>
               <p>RPG</p>
                  <br>
               <p style="font-weight:bold;"> Platform</p>
               <p>Windows, Mac OS, PS4, PS5, Nintendo Switch
               </p>
               </div>
             </div>
           </div></a>

            <!--.card-->
            <a href="gamepage/shadow.php"><div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front">
            <img src="Top100 img/ShadowOfTheColossus.jpg" alt="" style="height: 68%;">
              <h4 class="card__title">Shadow Of The Colossus</h4><br>
              <p class="card__price">#12</p>
              </div>
              <div class="flip-card-back"><br>
              <p style="font-weight:bold;">Date of release</p>
              <p>Februrary 6, 2018</p><br>
              <p style="font-weight:bold;">Genre</p>
              <p>Action-Adventure, puzzle</p>
                 <br>
              <p style="font-weight:bold;"> Platform</p>
              <p>PS4</p>
              </div>
            </div>
          </div></a>

           <!--.card-->
           <a href="gamepage/castlevs.php"><div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
          <img src="Top100 img/CastlevaniaSymphony.jpg" alt="" style="height: 68%;">
            <h4 class="card__title">Castlevania: Symphony Of The Night</h4><br>
            <p class="card__price">#13</p>
            </div>
            <div class="flip-card-back"><br>
            <p style="font-weight:bold;">Date of release</p>
            <p>March 20, 1997</p><br>
            <p style="font-weight:bold;">Genre</p>
            <p>Action, RPG, Platformer</p>
               <br>
            <p style="font-weight:bold;"> Platform</p>
            <p>PS, XBox 360, Sega Saturn</p>
            </div>
          </div>
        </div></a>
        
         <!--.card-->
         <a href="gamepage/mgrr.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/MetalGearRisingRevengeance.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">Metal Gear Rising: Revengeance</h4><br><br>
           <p class="card__price">#14</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>February 13, 2013</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Action-adventure, Hack and slash</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS3, XBox 360, Windows</p>
           </div>
         </div>
       </div></a>
          
         <!--.card-->
         <a href="gamepage/thewit.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/TheWitcher3.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">The Witcher 3</h4><br><br>
           <p class="card__price">#15</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>May 19, 2015</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Action, RPG</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS4, Ps5, XBox One, Nintendo Switch</p>
           </div>
         </div>
       </div></a>
       
        <!--.card-->
        <a href="gamepage/skyr.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/Skyrim.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">Skyrim</h4><br><br>
           <p class="card__price">#16</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>November 11, 2011</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Action, RPG</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS3, PS4, XBox One, Nintendo Switch</p>
           </div>
         </div>
       </div></a>
        
         <!--.card-->
         <a href="gamepage/minecr.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/Minecraft.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">Minecraft</h4><br><br>
           <p class="card__price">#17</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>November 18, 2011</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Sandbox, Survival</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>Windows, Mac OS, Linux</p>
           </div>
         </div>
       </div></a>

        <!--.card-->
        <a href="gamepage/hk.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/HollowKnight.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">Hollow Knight</h4><br><br>
           <p class="card__price">#18</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>February 24, 2017</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Metroidvania</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS4, Windows, XBox 260, Nintendo Switch</p>
           </div>
         </div>
       </div></a>

        <!--.card-->
        <a href="gamepage/gowr.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/GoWRagnarok.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">God Of War Ragnarok</h4><br><br>
           <p class="card__price">#19</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>November 9, 2022</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>Action-adventure, Hack and slash</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS4, PS5</p>
           </div>
         </div>
       </div></a>

        <!--.card-->
        <a href="gamepage/persona5.php"><div class="flip-card">
           <div class="flip-card-inner">
               <div class="flip-card-front">
         <img src="Top100 img/Persona5.jpg" alt="" style="height: 68%;">
           <h4 class="card__title">Persona 5</h4><br><br>
           <p class="card__price">#20</p>
           </div>
           <div class="flip-card-back"><br>
           <p style="font-weight:bold;">Date of release</p>
           <p>September 15, 2016</p><br>
           <p style="font-weight:bold;">Genre</p>
           <p>RPG, Social Simulation</p>
              <br>
           <p style="font-weight:bold;"> Platform</p>
           <p>PS3, PS4, PS5, Nintendo Switch,XBox One, Windows</p>
           </div>
         </div>
       </div></a>

        <!--.card-->
        <a href="gamepage/GTA5.php"><div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/GTA5.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">GTA 5</h4><br><br>
                <p class="card__price">#21</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>September 17, 2013</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3 , PS4, PS5, Xbox One,Windows</p>
                </div>
              </div>
            </div></a>

            <!--.card-->
            <a href="gamepage/SuperMetroid.php"><div class="flip-card">
              <div class="flip-card-inner">
                  <div class="flip-card-front">
            <img src="Top100 img/SuperMetroid.jpg" alt="" style="height: 68%;">
              <h4 class="card__title">Super Metroid</h4><br><br>
              <p class="card__price">#22</p>
              </div>
              <div class="flip-card-back"><br>
              <p style="font-weight:bold;">Date of release</p>
              <p>March 19, 1994</p><br>
              <p style="font-weight:bold;">Genre</p>
              <p>Action-Adventure</p>
                 <br>
              <p style="font-weight:bold;"> Platform</p>
              <p>NES</p>
              </div>
            </div>
          </div></a>
           
           <!--.card-->
           <a href="gamepage/Hades.php"><div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
          <img src="Top100 img/Hades.jpg" alt="" style="height: 68%;">
            <h4 class="card__title">Hades</h4><br><br>
            <p class="card__price">#23</p>
            </div>
            <div class="flip-card-back"><br>
            <p style="font-weight:bold;">Date of release</p>
            <p>September 17, 2020</p><br>
            <p style="font-weight:bold;">Genre</p>
            <p>Action, RPG, Rougue-like</p>
               <br>
            <p style="font-weight:bold;"> Platform</p>
            <p>PS4, PS5, Windows, Nintendo Switch</p>
            </div>
          </div>
        </div></a>

        <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Bloodborne.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Bloodborne</h4><br><br>
                <p class="card__price">#24</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 15, 2015</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Hack and Slash</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/ResidentEvil4.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Resident Evil 4</h4><br><br>
                <p class="card__price">#25</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 24, 2023</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Survival, Horror</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/PokemonSoulSilver.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Pokemon Soul Silver</h4><br><br>
                <p class="card__price">#26</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>September 12, 2009</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Nintendo DS</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Celeste.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Celeste</h4><br><br>
                <p class="card__price">#27</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>January 25, 2018</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Platformer</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, Nintendo Switch, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/ItTakesTwo.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">It Takes Two</h4><br><br>
                <p class="card__price">#28</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 26, 2021</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Platformer</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows, Xbox One</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/AlienIsolation.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Alien: Isolation</h4><br><br>
                <p class="card__price">#29</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>October 7, 2014</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Stealth, Survival-Horror</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3, PS4, Windows, Xbox One, Nintendo Switch</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/DoomEternal.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Doom Eternal</h4><br><br>
                <p class="card__price">#30</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 20, 2020</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>First-person Shooter</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows, Nintendo Switch, Xbox One</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Uncharted4.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Uncharted 4</h4><br><br>
                <p class="card__price">#31</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>May 10, 2016</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Third-person shooter</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/MassEffect.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Mass Effect</h4><br><br>
                <p class="card__price">#32</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 20, 2007</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action, RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3, Xbox 360, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/SilentHill2.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Silent Hill 2</h4><br><br>
                <p class="card__price">#33</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>September 25, 2001</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Survival, Horror</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS2, Xbox, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/LeagueOfLegends.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">League Of Legends</h4><br><br>
                <p class="card__price">#34</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>October 27, 2009</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>MOBA</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Mac OS, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/SuperSmashBrosUltimate.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Super Smash Bros. Ultimate</h4><br><br>
                <p class="card__price">#35</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>December 7, 2018</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Platform fighting game</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Nintendo Switch</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/MetalGearSolid3.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Metal Gear Solid 3: Subsistence</h4><br><br>
                <p class="card__price">#36</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>December 22, 2005</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Stealth</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS2, PS3, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/SekiroShadowsDieTwice.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Sekiro: Shadows Die Twice</h4><br><br>
                <p class="card__price">#37</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>March 22, 2019</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, Xbox One, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/NierAutomata.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">NieR: Automata</h4><br><br>
                <p class="card__price">#38</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>February 23, 2017</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action, RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, Xbox One, Nintendo Switch, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Dishonored2.jpg
              " alt="" style="height: 68%;">
                <h4 class="card__title">Dishonored 2</h4><br><br>
                <p class="card__price">#39</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 11, 2016</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure, Stealth</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, Xbox One, Windows</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/TheCatLady.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">The Cat Lady</h4><br><br>
                <p class="card__price">#40</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>December 7, 2012</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Graphic Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Windows, Linux</p>
                </div>
              </div>
            </div>
             
             <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/BatmanArkhamCity.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Batman: Arkham City</h4><br><br>
                <p class="card__price">#41</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>October 18, 2011</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows,Xbox 360, Xbox One, Wii U</p>
                </div>
              </div>
            </div>

             <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/GranTurismo.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Gran Turismo</h4><br><br>
                <p class="card__price">#42</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>December 23, 1997</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Sim Racing</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PlayStation</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/BioShock.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">BioShock</h4><br><br>
                <p class="card__price">#43</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>August 21, 2007</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>First-person Shooter</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS3, Windows, Xbox 360, Mac OS</p>
                </div>
              </div>
            </div>

             <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/HaloCombatEvolved.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Halo: Combat Evolved</h4><br><br>
                <p class="card__price">#44</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>April 20, 2018</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>First-person Shooter</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Windows, Xbox, Xbox 360, Mac OS X</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/MetroidPrime.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Metroid Prime</h4><br><br>
                <p class="card__price">#45</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 18, 2002</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>GameCube, Wii</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/FinalFantasy6.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Final Fantasy 6</h4><br><br>
                <p class="card__price">#46</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>April 2, 1994</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Super NES, PlayStation, GBA, Windows, Nintendo Switch, PS4</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/WorldOfWarcraft.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">World Of Warcraft</h4><br><br>
                <p class="card__price">#47</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>November 23, 2004</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Massive Multiplayer, Online RPG</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Windows, Mac OS</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Diablo2.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Diablo 2</h4><br><br>
                <p class="card__price">#48</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>June 28, 2002</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-RPG, Hack and Slash</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>Windows, Mac OS</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/GTASanAndreas.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">GTA: San Andreas</h4><br><br>
                <p class="card__price">#49</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>October 26, 2004</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Action-Adventure</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS2, PS3, Windows, Mac OS, Xbox, Xbox 360</p>
                </div>
              </div>
            </div>

            <!--.card-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
              <img src="Top100 img/Hitman3.jpg" alt="" style="height: 68%;">
                <h4 class="card__title">Hitman 3</h4><br><br>
                <p class="card__price">#50</p>
                </div>
                <div class="flip-card-back"><br>
                <p style="font-weight:bold;">Date of release</p>
                <p>January 20, 2021</p><br>
                <p style="font-weight:bold;">Genre</p>
                <p>Stealth</p>
                   <br>
                <p style="font-weight:bold;"> Platform</p>
                <p>PS4, PS5, Windows, Xbox One, Nintendo Switch</p>
                </div>
              </div>
            </div>
            
        </div>
    </div>
</div>

            
</body>
</html>
