<?php

if (!isset($_POST["surveyCompleted"]) || $_POST["surveyCompleted"] == false) {
	$_POST["surveyCompleted"] = false;
}

$firstName = "Sarah and Dan";


$welcomeNote = 
"Dear Sarah and Dan, 

This is an opportunity for us to read back our previous discussions with the customer, to confirm that what we have found is perfectly in line with what they are looking for, and describe why we think the selected photographers are the best fit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.

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
Boudoir session
Online gallery";

$photographerName2 = "Thomas";
$photo2 = "img/portfolio/steam_rain_love_date_smile_67491_2560x1440.jpg";
$price2 = "<b>Price:</b> $2,990";
$experience2 = "<b>Experience:</b> 13 years";
$reviews2 = "<b>Reviews:</b> 9.1/10 (3 testimonials)";
$package2 = 
"<b>Package Perks:</b>
8 hours of coverage
25 prints (6 x 8)
Online gallery";

$photographerName3 = "Henrique";
$photo3 = "img/portfolio/Most-Romantic-Love-Couple-Hd-Wallpaper.jpg";
$price3 = "<b>Price:</b> $3,158";
$experience3 = "<b>Experience:</b> 9 years";
$reviews3 = "<b>Reviews:</b> 8.9/10 (3 testimonials)";
$package3 = 
"<b>Package Perks:</b>
Full-day coverage
Travel fee
Online gallery";

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
	"We use this section to give a personal upsell about the photographer. Our experience shows that it is much easier for customers to trust our opinion as a third party than to hear a photographer sell themselves. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";


	$packageHeader = 
	"<b>Wedding collections start at $2,000</b>
	This section is unique for each photographer. It describes how a bride can \"create their own\" package with custom add-ons and upselling.";


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



} else if ($_GET["photog"] == "2") {
	$portfolio = array(
		"/img/Roland/Yuri-Irene-Gallery-18.jpg",
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
} else if ($_GET["photog"] == "3") {
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
}


include_once("personal.html");

?>