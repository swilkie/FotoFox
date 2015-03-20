<?php

if (!isset($_POST["surveyCompleted"]) || $_POST["surveyCompleted"] == false) {
	$_POST["surveyCompleted"] = false;
}

$firstName = "Jennifer and Raymond";


$welcomeNote = 
"We are happy to present to you the top three photographers who best matched your criteria, and most importantly, your preferences. Because quality is most important for you, we began by only selecting photographers who have been able to show guaranteed quality on a consistent basis. Photographers were further refined to only show those capable of the specific styles you found appealing. Each chosen photographer excels in the photography styles you prefer: photojournalism, tradition, contemporary, and fine arts. This means you can expect a range of photographs from breathtaking picturesque shots to candid, real moments, each with a touch of creativity to capture your story in a multitude of ways.

All photographers were selected to match your proposed dates, location, and budget. We’ve customized a personal package with each photographer to ensure you receive all the features you’re looking for. By customizing your package, we were also able to secure special rates so that all packages are in your desired price range (ranging from 3,100 to 3,863). By ensuring these little details, we hope you can make a choice with the emphasis on simply: which photographer’s portfolio and personality do you like best. Scroll down to quickly compare all three photographers at a glance. Click on the photographer’s profile boxes to view their respective portfolios, package details, and reviews.";


$photographerName1 = "Eric";
$photo1 = "img/Eric/EllaJames_Blog-71.jpg";
$price1 = "<b>Price:</b> $3,863";
$experience1 = "<b>Experience:</b> 5 years";
$reviews1 = "<b>Overall Compatibility:</b> 92%";
$package1 = 
"<b>Package Perks:</b>
8 Hours of Coverage
2nd Photographer
Engagement Shoot
Black & White version of all photos";

$photographerName2 = "Jeremy";
$photo2 = "img/Jeremy/Distillery-District-Winter-Wedding.jpg";
$price2 = "<b>Price:</b> $3,100";
$experience2 = "<b>Experience:</b> 3 years";
$reviews2 = "<b>Overall Compatibility:</b> 90%";
$package2 = 
"<b>Package Perks:</b>
12 Hours of Coverage
2nd Photographer
Engagement Shoot
DVD Slideshow";

$photographerName3 = "Roland";
$photo3 = "img/Roland/steph-erwin-wedding_0017.jpg";
$price3 = "<b>Price:</b> $3,300";
$experience3 = "<b>Experience:</b> 5 years";
$reviews3 = "<b>Overall Compatibility:</b> 84%";
$package3 = 
"<b>Package Perks:</b>
10 hours of coverage
2nd Photographer
Engagement Shoot";

$photographerCommon = 
"Included in all three: All photos are post-processed in non-watermarked HD resolution. Digital photos are available on DVD/USB. Each selected photographer has liability insurance and proper backup equipment to avoid any issues on the day.";

/*****************    Photographer 1    *************************/

//if first time visiting, or photographer 1 selected.
if (!isset($_GET["photog"]) || $_GET["photog"] == "1")
{
	$portfolio = array(
		"img/Eric/EllaJames_Blog-71.jpg",
		"img/Eric/DariaMirek_Blog-1009.jpg",
		"img/Eric/TheresaJoey_872px-1014.jpg",
		"img/Eric/MackenzieMichael_Blog-1017.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1055.jpg",
		"img/Eric/MeaganKris_Blog-1005.jpg",
		"img/Eric/ShannonChris_Wedding_Blog_872px-1032.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1016.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1024.jpg",
		"img/Eric/KristaDave_Blog-1067.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1060.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1065.jpg",
		"img/Eric/KristaChad_872px-1161.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1071.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1076.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1179.jpg",
		"img/Eric/KristaDave_Blog-1034.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1201.jpg",
		"img/Eric/KristaDave_Blog-1006.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1263.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1323.jpg",
		"img/Eric/Wedding_Slideshow_1080p-1327.jpg",
		"img/Eric/anniejon-1001.jpg",
		"img/Eric/KristaChad_872px-1008.jpg",
		"img/Eric/DariaMirek_Blog-1013.jpg",
		"img/Eric/MackenzieMichael_Blog-1006.jpg",
		"img/Eric/EllaJamesBlog-61.jpg",
		"img/Eric/KristaChad_872px-1046.jpg",
		"img/Eric/Sue_Bridal-1001.jpg"
		);

	$photographerNote = 
	"<i>\"When you photograph people in color you photograph their clothes. 
	When you photograph people in black and white, you photograph their soul.\"</i>
	— Ted Grant

	Eric has an exceptional eye for the artistic, quirky, emotional, and unique. His strength is storytelling:  he is one of the few who is capable of snapping single moments that capture a lifetime of emotions and stories.  Another specialty of his is producing black & white photos. He coordinates a variety of techniques to enhance photos and create the most elegant monochrome versions possible.  On the wedding day, he operates in two different modes:  a discrete ninja who captures candid details, versus an assertive and confident director who will place you exactly where you need to be for a stunning shot.";


	$packageHeader = 
	"<b>Your wedding collection quote: $3,863</b>

	Your custom quote is valued at $4,545 when items are added à la carte. It includes 8 hours of coverage, a 2nd shooter for 4 hours, an engagement shoot, a wedding day portrait session, 400 to 600 professionally edited and retouched photos, and a black & white version of all photos.

	If you want to consider more options, here is a detailed breakdown of Eric's package deals and items.";


	$packageLeft = 
	"Basic wedding package: <b>$3,045</b>
	8 hours of coverage
	Wedding day portrait session
	400-600 photos

	Better wedding package: <b>$3,775</b>
	12 hours of coverage
	Wedding day portrait session
	500-700 photos
	Online gallery
	Engagement photoshoot

	Best wedding package: <b>$4,815</b>
	14 hours of coverage
	Wedding day portrait session
	600-800 photos
	Online gallery
	Engagement photoshoot
	Photobooth (2 hours)
	Black & white version of all photos
	2nd photographer for 4 hours

	";


	$packageRight = 
	"<b>À la carte + Add-ons</b>

	Hourly rate <b>$150/hr</b>

	2nd photographer <b>$150/hr</b> (min. 4 hours)

	Black & White versions of all shots <b>$300</b>

	Online Gallery: <b>$200</b>

	Engagement Photoshoot <b>$600</b>

	Photobooth (2 hours) <b>$675</b>

	Photobooth overtime <b>$100/hr</b>

	Wedding photo album <b>$800</b> (further options/upgrades available)

	";

	$reviews = array(
	    [
	    "comment" => "Thank you so much for those photos. I cannot even begin to describe the reactions they've received. Everyone that looked at them were blown away by their beauty. You truly have a talent.",
	    "author" => "Emily"
	    ],
	    [
	    "comment" => "More than anything, the quality of Eric's photos blew me away. But I was equally amazed with his presence at our wedding. At the portrait session, he coordinated a really large group into an amazing photo. He kept a great atmosphere, but his efficiency let us get back to our wedding in the shortest time possible.

We didn't noticed him for the rest of the day, we had a really intimate wedding with our friends and family without any intrusion. But his photos were so incredible. We have no idea how he was able to capture so many of our most intimate moments. He somehow captured all of the tiniest details of our day, in such an artistic way. We’re so happy to have worked with Eric.",
	    "author" => "Joan"
	    ],
		[
	    "comment" => "Wow!  The photos are absolutely amazing. They look like they are from a fairytale.",
	    "author" => "Ella & James"
	    ],
    );



} else if ($_GET["photog"] == "2") {
	$portfolio = array(
		"img/Jeremy/Distillery-District-Winter-Wedding.jpg",
		"img/Jeremy/3.jpg",
		"img/Jeremy/1.jpg",
		"img/Jeremy/2.jpg",
		"img/Jeremy/4.jpg",
		"img/Jeremy/6.jpg",
		"img/Jeremy/8.jpg",
		"img/Jeremy/9.jpg",
		"img/Jeremy/11.jpg",
		"img/Jeremy/7.jpg",
		"img/Jeremy/16.jpg",
		"img/Jeremy/12.jpg",
		"img/Jeremy/13.jpg",
		"img/Jeremy/14.jpg",
		"img/Jeremy/21.jpg",
		"img/Jeremy/22.jpg",
		"img/Jeremy/18.jpg",
		"img/Jeremy/17.jpg",
		"img/Jeremy/KW-Destination-Wedding-Photography.jpg",
		"img/Jeremy/Cancun-Saphhire-Wedding-Resort-Photographer.jpg",
		"img/Jeremy/Destination-Wedding-Photography-Spa-Getting-Ready.jpg",
		"img/Jeremy/GTA-wedding-photography-destination-travel-photographer.jpg",
		"img/Jeremy/Kitchener-Destination-Wedding-Photography.jpg",
		"img/Jeremy/Kitchener-Waterloo-Wedding-Photographer.jpg"
		);

	$photographerNote = 
	"<i>\"Taking pictures is savoring life intensely every hundredth of a second.\"</i>
	— Mark Riboud

	Jeremy’s work speaks for himself, and his level of impeccable professionalism is remarkable. He loves to savor every moment in the easiest way possible with simple posing, creative composition, and critical use of light. By bringing a unique upbeat energy to the wedding day, he has a special way of drawing out genuine emotions and the best smiles from his clients. 
	";


	$packageHeader = 
	"<b>Your wedding collection quote: $3,100</b>
	Your custom quote is valued at $4,799 when items are added à la carte. It includes 12 hours of coverage, a 2nd shooter, an engagement shoot, a DVD slideshow, and an online Facebook & blog post.

	If you want to consider more options, here is a detailed breakdown of Jeremy's package deals and items.

	";


	$packageLeft = 
	"Basic starter: <b>$1,800</b>
	7 hours of coverage
	6 months of online protected gallery

	Bronze edition: <b>$2,800</b>
	8 hours of coverage
	2nd photographer
	Engagement session
	2yr online protected gallery
	9.5x9.5 handmade Italian album

	Silver edition: <b>$3,800</b>
	12 hours of coverage
	2nd photographer
	Engagement session
	3yr online protected gallery
	Mobile Smartphone gallery app
	DVD slideshow
	10x10 Engagement album
	16x12 handmade Italian album

	Gold label: <b>$5,200</b>
	12 hours of coverage
	2nd & 3rd photographers
	Engagement session
	Pre-bridal or Post trash the dress session
	10yr online protected gallery
	Mobile Smartphone gallery app
	DVD slideshow
	10x10 Engagement album
	18x14 handmade Italian album
	";


	$packageRight = 
	"<b>À la carte + Add-ons</b>

	Hourly rate <b>$200/hr</b>

	2nd photographer <b>$800</b>

	Assistant 2nd photographer <b>$400</b>

	High resolution photos on USB <b>$999</b>

	Engagement Photoshoot <b>$200</b>

	Pre-bridal session <b>$200</b>

	Post-trash the dress session <b>$200</b>

	Online gallery: <b>$100/yr</b>

	Mobile Smartphone gallery app <b>$250</b>

	Photobooth session <b>$1,000</b>

	DVD slideshow <b>$400</b>

	Same-day slideshow <b>$400</b>

	Framed canvas acrylic <b>$250</b>

	Highlight film & Cinematography <b>$1,500</b>

	Wedding photo album (starting at) <b>$1,499</b>

	various prints & canvas options

	";

	$reviews = array(
		[
	    "comment" => "Jeremy did an amazing job, couldn’t have pictured it going any better and he was there to capture the special moments. He went above and beyond. I would definitely recommend to friends and family.",
	    "author" => "Will & Ramena"
	    ],
		[
	    "comment" => "Our experience with Jeremy was fantastic! Nathan and I loved how he ran the shoot, making us feel comfortable and not being posed into awkward positions! The photos turned out wonderfully and we absolutely LOVED the creative angles and style that Jeremy used. If you’re looking for a more candid style of photos with a creative spin we would definitely recommend Jeremy! Thank you again Jeremy for the great experience we had working with you!",
	    "author" => "Katie & Nathan"
	    ],
	    [
	    "comment" => " We very much enjoyed working with Jeremy. His willingness to go out in the pouring rain with us and not reschedule meant the world to us. Just like in life, not every day is perfectly sunny and bright. We made the best of it, and our smiles shone through the rain. Jeremy is very talented and very comfortable to be around. I'll never forget when he told my fiance to say something funny in my ear and he whispered \"I really want Burger King!\" He really captured our natural laughter and smiles. Thank you Jeremy.",
	    "author" => "Mandea & John"
	    ]
    );
} else if ($_GET["photog"] == "3") {
	$portfolio = array(
		"img/Roland/steph-erwin-wedding_0017.jpg",
		"img/Roland/Lauren-Chris-Wedding-Web-10.jpg",
		"img/Roland/Ed-Mae-Web-19.jpg",
		"img/Roland/Marilyn-Jonathan-Gallery-23.jpg",
		"img/Roland/Nadia-Chris-Web-1.jpg",
		"img/Roland/qssis-kristina-wedding-014.jpg",
		"img/Roland/qssis-kristina-wedding-024.jpg",
		"img/Roland/rachael-miles-blog_0037.jpg",
		"img/Roland/sharon-yushi-hart-house_0001.jpg",
		"img/Roland/Stan-Diane-Engagement-Web-6.jpg",
		"img/Roland/Stan-Diane-Engagement-Web-9.jpg",
		"img/Roland/Steph-Cilian-Gallery-12.jpg",
		"img/Roland/Steph-Cilian-Gallery-75.jpg",
		"img/Roland/Kevin-Sheila-140.jpg",
		"img/Roland/Steph-Cilian-Gallery-77.jpg",
		"img/Roland/Steph-Cilian-Gallery-125.jpg",
		"img/Roland/steph-erwin-wedding_0004.jpg",
		"img/Roland/Yuri-Irene-Gallery-18.jpg"
		);

	$photographerNote = 
	"<i>\"It is more important to click with people than to click the shutter.\"</i>
	- Alfred Eisenstaedt

	Roland is a photographer who goes above and beyond expectations, every time. With his cheerful, friendly personality, he befriends his clients in a way that helps bring out their best and authentic selves for the photoshoot. Combined with his tasteful creativity, the result is an unforgettable experience and a collection of elegant photos that  tell your story. He captures stolen moments and the meaningful details of your wedding in an unobstructive way.";


	$packageHeader = 
	"<b>Your wedding collection quote: $3,300</b>
	Your custom quote includes 10 hours of coverage, a 2nd shooter, an engagement shoot, and a DVD of 500-600 edited HD photos.

	If you want to consider more options, here is a detailed breakdown of Roland's package deals and items.
	";


	$packageLeft = 
	"Bronze package: <b>$2,080</b>
	8 hours of coverage
	300-400 photos
	1 photographer

	Silver package: <b>$3,000</b>
	10 hours of coverage
	500-600 photos
	2 photographers

	Gold package: <b>$3,600</b>
	12 hours of coverage
	600-800 photos
	2 photographers
	";


	$packageRight = 
	"<b>À la carte + Add-ons</b>

	Engagement shoot <b>$300</b>";

	$reviews = array(
		[
	    "comment" => "Roland and his team were by far the best choice we made with regards to vendors for our wedding. He was not only professional but also friendly, creative and completely willing to be flexible to any ideas or wishes that my husband or I had. I will and have recommended him highly to anyone who is looking for a talented photographer for any event. The quality and quantity of photos we received from Roland alone would be enough to make us refer him to our friends, but his personality of him and his team is the cherry on top . We can't thank them enough for making our day that much easier and the memories we share with our photos that much more special.",
	    "author" => "Kristina"
	    ],
		[
	    "comment" => "We had the pleasure of having Roland and his team photograph our wedding in August. They were fantastic to work with throughout the full day, always being professional, unobtrusive, and managed to capture every key moment throughout the day, plus some great candid shots, and great pics of our crazing dancing family! They went above and beyond for us that day, stayed a little late to make sure they captured it all. I highly recommend them!",
	    "author" => "Courtney"
	    ],
	    [
	    "comment" => "We were extremely pleased with Roland and both our engagement photos as well as wedding photos turned out amazing! Both Roland and his second photographer Ricki were professional and super friendly. Our shoot had a lot of energy and he truly made us all feel extremely comfortable working together. They did an amazing job at capturing the real candid moments of our wedding but at the same time were able to come up with some amazing creative shots. They truly went the extra mile working for us and stayed even longer than required to capture all of our special moments which definitely did not go unnoticed! Truly an amazing person and photographer to work with and would definitely recommend him to anyone and everyone!",
	    "author" => "Diane"
	    ]
    );
}


include_once("personal.html");

?>