<?php

if (!isset($_POST["surveyCompleted"]) || $_POST["surveyCompleted"] == false) {
	$_POST["surveyCompleted"] = false;
}

$firstName = "Sarah and Dan";


$welcomeNote = 
"Dear Sarah and Dan, 

Here are the top three photographers we feel best match your criteria, and most importantly, your preferences. Since your wedding is winter-themed and you specially requested outdoor photography in a snowy background, we selected photographers who have experience shooting winter weddings. Their styles are photojournalistic and fine arts photography. 

Because all of them match your budget, availability, and location, you can focus solely on choosing the photographer with the portfolio that you like best, as well as the personal connection. Scroll down to quickly compare all three photographers at a glance. Click on the photographers’ profile boxes to view their respective portfolios, package details, and reviews.

- Fotofox";


$photographerName1 = "Michelle";
$photo1 = "img/portfolio/love-couple-wallpaper.jpg";
$price1 = "<b>Price:</b> $3,400";
$experience1 = "<b>Experience:</b> 13 years";
$reviews1 = "<b>Reviews:</b> 9.3/10 (4 testimonials)";
$package1 = 
"<b>Package Perks:</b>
10 hours of coverage
album
boudoir session
online gallery";

$photographerName2 = "Thomas";
$photo2 = "img/portfolio/steam_rain_love_date_smile_67491_2560x1440.jpg";
$price2 = "<b>Price:</b> $2,990";
$experience2 = "<b>Experience:</b> 13 years";
$reviews2 = "<b>Reviews:</b> 9.1/10 (3 testimonials)";
$package2 = 
"<b>Package Perks:</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 hours of coverage
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25 prints (6 x 8)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;online gallery";

$photographerName3 = "Henrique";
$photo3 = "img/portfolio/Most-Romantic-Love-Couple-Hd-Wallpaper.jpg";
$price3 = "<b>Price:</b> $3,158";
$experience3 = "<b>Experience:</b> 9 years";
$reviews3 = "<b>Reviews:</b> 8.9/10 (3 testimonials)";
$package3 = 
"<b>Package Perks:</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;full-day coverage
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel fee
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;online gallery";

$photographerCommon = 
"Included in all three:  2nd shooter, all photos post-processed in non-watermark HD resolution, digital files on DVD/USB, and a full day engagement shoot.  They all have liability insurance and sufficient backup equipment.";

/*****************    Photographer 1    *************************/

//if first time visiting, or photographer 1 selected.
if (!isset($_GET["photog"]) || $_GET["photog"] == "1")
{
	$portfolio = array(
		"img/portfolio/love-couple-wallpaper.jpg",
		"img/portfolio/1622519.jpg",
		"img/portfolio/ate_feelings_balls_love_mood_54201_2560x1440.jpg",
		"img/portfolio/girl_bride_dress_window_holiday_wedding_95974_2560x1440.jpg"
		);

	$photographerNote = 
	"Michelle is the lead photographer. Her outgoing personality, fearless creativity, and unique eye for anticipating and capturing emotions are second to none. Her passion is not just taking photos, but in personally connecting with every couple that she photographs. From climbing trees to shooting in extreme weathers, she never lets anything get in the way of capturing the perfect angle, the perfect timing, or the perfect lighting!";


	$packageHeader = 
	"<b>Wedding collections start at $2,000</b>
	All wedding packages include digital negatives and a proof album (custom image box with 4x6 prints of your full gallery).";


	$packageLeft = 
	"Basic wedding package: <b>$2,000</b>
	1 photographer
	8 hours of coverage

	Popular wedding package: <b>$2,850</b>
	2 photographers
	10 hours of coverage

	Full wedding package: <b>$3,600</b>
	2 photographers
	Full-day coverage";


	$packageRight = 
	"Enjoy single person coverage with Michelle for a minimum of 8 hours. Or, to capture every moment of your special day, choose 2 person coverage for a minimum of 10 hours.


	boudoir session (1 or 2 hours): <b>$135/hr</b>

	Online Gallery: <b>$225</b>

	Engagement Session (2-3 hours): <b>$550</b>

	
	5 canvas prints (8 x 10): <b>$425</b>";

	$reviews = array(
		[
	    "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit",
	    "author" => "Janice"
	    ],
		[
	    "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa",
	    "author" => "Allison"
	    ],
	    [
	    "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex",
	    "author" => "Jessica"
	    ]
    );



} else {
	$portfolio = array(
		"img/portfolio/steam_rain_love_date_smile_67491_2560x1440.jpg",
		"img/portfolio/Most-Romantic-Love-Couple-Hd-Wallpaper.jpg",
		"img/portfolio/wedding_husband_wife_4860_2560x1440.jpg",
		"img/portfolio/Couple-Love-Photography-Background-HD-Wallpaper.jpg",
		"img/portfolio/couple_dance_happiness_rain_wet_love_54364_2560x1440.jpg"
		);

	$photographerNote = 
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit";


	$packageHeader = 
	"<b>Lorem ipsum dolor sit amet, consectetur</b>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";


	$packageLeft = 
	"Lorem ipsum dolor: <b>$2,000</b>
	1 Lorem ipsum
	8 Lorem ipsum dolor

	Lorem ipsum dolor sit: <b>$2,850</b>
	2 Lorem ipsum
	10 Lorem ipsum dolor

	Lorem ipsum dolor sit: <b>$3,600</b>
	2 Lorem ipsum
	Lorem ipsum dolor sit";


	$packageRight = 
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.


	Lorem ipsum (1 or 2 hours): <b>$135/hr</b>
	Lorem ipsum dolor: <b>$225</b>
	Lorem ipsum dolor: (2-3 hours): <b>$550</b>
	Lorem ipsum (8 x 10): <b>$425</b>";
}



include_once("personal.html");

?>