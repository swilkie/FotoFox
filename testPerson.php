<?php

$firstName = "Jennifer";


$welcomeNote = 
"The world today is looking for men and women,
Who are not for sale
Who are honest, sound from centre to circumference, true to the heart's core
With consciences as steady as the needle to the pole
Who will stand for the right if the heavens totter and the earth reels
Who can tell the truth and look the world right in the eye
Who neither brag nor run
Who neither flag or flinch
Who can have courage without shouting it
In whom the courage of everlasting life runs still, deep and strong
Who know their message and tell it
Who know their place and fill it
Who know their business and attend to it
Who will not lie, shirk or dodge
Who are not too lazy to work, nor too proud to be poor
Who are willing to eat what they have earned and wear what they have paid for
Who are not ashamed to say \"No\" with emphasis

God is looking for them. He wants those who can unite together around a common faith - who can join hands in a common task - and who have come to the kingdom for such a time as this. God give us such as them.

Not only will they be better prepared to fulfil their duties as a citizen, they should make a better friend, a better husband, a better father, a better wife, because free people do. They will, in short, be better prepared to live, and when their hour comes, they will know better how to die because free people do.

– Athol Murray";

$photographerCommon = 
"The world today is looking for men and women, Who are not for sale, Who are honest, sound from centre to circumference, true to the heart's core.
With consciences as steady as the needle to the pole. Who will stand for the right if the heavens totter and the earth reels
Who can tell the truth and look the world right in the eye. Who neither brag nor run";



/*****************    Photographer 1    *************************/

$photographerName = "Jacob";

//if first time visiting, or photographer 1 selected.
if (!isset($_GET["photog"]) || $_GET["photog"] == "1")
{
	$portfolio = array(
		"img/portfolio/1541435.jpg",
		"img/portfolio/1622519.jpg",
		"img/portfolio/love-couple-wallpaper.jpg",
		"img/portfolio/girl_bride_dress_window_holiday_wedding_95974_2560x1440.jpg"
		);

	$photographerNote = 
	"The world today is looking for men and women,
	Who are not for sale
	Who are honest, sound from centre to circumference, true to the heart's core
	With consciences as steady as the needle to the pole
	Who will stand for the right if the heavens totter and the earth reels
	Who can tell the truth and look the world right in the eye
	Who neither brag nor run
	Who neither flag or flinch";


	$packageHeader = 
	"<b>Wedding collections start at $2,000</b>
	All wedding packages include digital negatives and a proof album (custom image box with 4x6 prints of your full gallery).";


	$packageLeft = 
	"Traditional Portrait Session Fee (2-3 hours):
	<b>$500</b>

	Documentary Lifestyple Session Fee (6-8 hours):
	<b>$900</b>

	Engagement Session (2-3 hours, 2 locations):
	<b>$750</b>";


	$packageRight = 
	"Enjoy single person coverage with Maggie for a minimum of 8 hours. Or, to capture every moment of your special day, choose 2 person coverage with Maggie and James for a minimum of 8 hours.

	Album packages start at <b>$1200</b>
	DVD packages start at <b>$900</b>
	Deluxe album packages start at <b>$2150</b>
	Deluxe DVD packages start at <b>$1500</b>";
}
//else if, photographer 2 selected

//else if, photographer 3 selected



include_once("personal.html");

?>