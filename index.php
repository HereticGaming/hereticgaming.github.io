<?php

// A Steam API Key is required so as to be able to contact steam and get a users profile image and name
// You can get a Steam API Key by visiting http://steamcommunity.com/dev/apikey
// Don't worry about the web address, it won't have any effect so just type in any web site
// Once you have your steam API Key simply paste the key below. (Make sure the quotation marks are still there or else it won't work)
$SteamAPIKey = "3557DA68C9FE30760164F736A685E317";


// Don't edit any of the PHP stuff here or else you may break the script
// If you website isn't displaying correctly then please make sure you have configured your loading url correctly
if (!isset($_GET["steamid"])) {
	die("Woops, you don't seem to be using the correct loading URL format, please make sure it has the correct extension it should look like this: www.yourdomain.com/loading/index.php?steamid=%s");
}

$steamid64 = $_GET["steamid"];

$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $SteamAPIKey . "&steamids=" . $steamid64;
$json = file_get_contents($url);
$table2 = json_decode($json, true);
$table = $table2["response"]["players"][0];

?>

<!DOCTYPE HTML>
<html>
	<head>
    <!-- Hello, your reading the source code for the server load page -->
	<!-- Created by CaptainMcMarcus for CoderHire -->
    <!-- This is the HTML code below and is safe to edit to your needs -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="HereticGaming Loading" /> <!-- Webpage Description --> 
	<title>HereticGaming Loading</title> <!-- Webpage Title -->
	<link href="style.css" rel="stylesheet" type="text/css" /> <!-- Links to the Stylesheet -->
    <link href="colour.css" rel="stylesheet" type="text/css" /> <!-- Links to the Stylesheet for main colours -->
	
    <script type="text/javascript" src="scripts/jquery.js"></script><!-- Link to jquery so we can do cool stuff -->
    <script type="text/javascript" src="scripts/cycle.js"></script><!-- For Rotating Backgrounds -->
    
    <script type="text/javascript"><!-- Script to center content -->
	$(document).ready(function() {
		//Changes volume of song. 0.5=50% volume
		$('.audio').prop("volume", 0.5);
			
		//Perfectly centres content to the middle of the screen both vertically and horizontally
		$(window).resize(function(){
			  $('.core-wrapper').css({
			   position:'absolute',
			   left: ($(window).width() 
				 - $('.core-wrapper').outerWidth())/2,
			   top: ($(window).height() 
				 - $('.core-wrapper').outerHeight())/2
			  });	
		});
		// Initiate centre function
		$(window).resize();
		
		//Lets get thos backgrounds moving
		$('#background-scroll').cycle({ 
			fx: 'fade',
			pause: 0, 
			speed: 1800, //Time to fade into the next image [in milliseconds]
			timeout: 5000  //Time spent on image [in milliseconds]
		});
	});
    </script>
    

	</head>
	
	<body>
    
    <div id="background-scroll"><!-- Add Backgrounds so we can have multiple ones -->
    	<!-- IF YOU NEED LESS BACKGROUNDS JUST REMOVE THEM OUT OF THE LIST -->
        <!-- TO ADD EXTRA BACKGROUNDS YOU NEED TO MODIFY THE STYLESHEET [ADVANCED USERS ONLY] -->
    	<div id="bg1"></div><!-- BG 1 -->
        <div id="bg2"></div><!-- BG 2 -->
        <div id="bg3"></div><!-- BG 3 -->
        <div id="bg4"></div><!-- BG 4 -->
        <div id="bg5"></div><!-- BG 5 -->
        <div id="bg6"></div><!-- BG 6 -->
		<div id="bg7"></div><!-- BG 7 -->
		<div id="bg8"></div><!-- BG 8 -->
		<div id="bg9"></div><!-- BG 9 -->
		<div id="bg10"></div><!-- BG 10 -->
   	</div>
    
    
    </div><!-- now we close the core wrapper to keep everything nicely contained and in the middle -->
    
    <!-- MUSIC SCRIPT -->
    <!-- To activate simply delete the comment tags and replace music.mp3 with the path to your sound file. -->
    <!-- Adding copyrighted music is illegal as you will be redistributing from the server this is hosted from, this means that you will be held liable -->
    
    <!--
    <audio class="audio" autoplay autobuffer="autobuffer">
    	<source src="music.ogg" type="audio/ogg">
    </audio>
    -->
    
    <script type="text/javascript" src="scripts/main.js"></script><!-- Script to get downloads, map, players, game mode and sort out the loading bar -->

	</body><!-- Closes off the HTML Document -->
</html>
