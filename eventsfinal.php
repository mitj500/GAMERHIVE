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
  ?>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php"><img src="img/logo_without_bg.png" width="200px"></a>
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
    <div class="eventscont">
        <div class="econtent-container">
			<header>
				<h1>EVENTS AND NEWS</h1>
			   </header>
			   <div class="container-grid">
				<div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/EVENTS 1.jpg" alt="Image 1">
				</div>
				<div class="container-text">
					<h2>EVENTS</h2>
					<p>Supanova Comic Con & Gaming: Melbourne
						<BR>
							22-23 April 2023
						<BR>
							Melbourne Showgrounds, Ascot Vale, Australia
						
						The Supanova show in the Gold Coast will be followed swiftly by the Melbourne version of the event. 
					</p>
				<button class="button button2">REAd more.....</button>
	 
				  </div>
		  
				</div>
				<div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/EVENTS 23.JPG" alt="Image 2">
				</div>
				<div class="container-text">
					<h2>EVENTS</h2>
					<p> Comic-Con: Adelaide
						<br>
						3-4 June 2023 
						<BR>
							Adelaide Showgrounds, Adelaide, Australia
						
						 The Adelaide leg of the latest Oz Comic-Con tour hits in June, amidst a number of other events, exhibitions, a	</p>
			<button class="button button2">REAd more.....</button>
		  </div>
			</div>
			
		<div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/EVENTS 5.jpg" alt="Image 3">
				</div>
				<div class="container-text">
					<h2>EVENTS</h2>
					<p> 
			  DreamHack Melbourne
			  <BR>
			 28-30 April 2023<BR>  
			 Melbourne Olympic Park, Melbourne, VIC
			 
			 <button class="button button2">REAd more.....</button><BR>
			 </p>
			 </div>
			</div>
		<div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/EVNTS 2.jpg" alt="Image 3">
				</div>
				<div class="container-text">
					<h2>EVENTS</h2>
					<p> 
			  DreamHack Melbourne
			  <BR>
			 28-30 April 2023<BR>  
			 Melbourne Olympic Park, Melbourne, VIC
			 <BR>
			 </p>
			 <button class="button button2">REAd more.....</button>
			 </div>
			</div>
		<div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/GOLDEN COAST CC.JPG" alt="Image 3">
				</div>
				<div class="container-text">
					<h2>EVENTS</h2>
					<p> 
						How Classified Pentagon Documents Spread Through a Minecraft Discord Server
			  <BR>
			 12  April 2023<BR>  
			 
			 <BR>
			 </p>
			 <button class="button button2">REAd more.....</button>
			 </div>
			</div><div class="container">
				<div class="container-image">
					<img src="EVENTS IMG/images.jpeg" alt="Image 3">
				</div>
				<div class="container-text">
					<h2>NEWS</h2>
					<p> 
						The Last of Us Part 1 PS5 Patch Adds Ellie's HBO T-Shirts From PC
			  <BR>  
				The Mortal Kombat and Wire t-shirts were previously exclusive to the PC version
			 <BR>
			  <button class="button button2">REAd more.....</button>
			 </p>
			 </div>
			</div>
	
		
	</div>
	
</body>
</html>
		
