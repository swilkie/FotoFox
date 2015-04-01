<?php

if (!isset($_POST["surveyCompleted"]) || $_POST["surveyCompleted"] == false) {
	$_POST["surveyCompleted"] = false;
}

$firstName = "Sarah and Dan";


$welcomeNote = 
"We are happy to present to you the top three photographers who best match your criteria, and most importantly, your preferences. Because the relationship with the photographer is the most important for you, we began by only selecting photographers who are particularly talented at befriending their clients in order to help them feel comfortable and natural. They have shown guaranteed quality on a consistent basis over a number of years. Photographers were further refined to only show those capable of the specific styles you found appealing. Each chosen photographer excels in the photography styles you prefer: photojournalistic, fine arts, contemporary, and traditional. This means you can expect a balanced mix of photographs from breathtaking picturesque shots to candid, real moments, each with exceptional creativity to capture your story in a multitude of ways.

All photographers were selected to match your proposed dates, location, and budget. We’ve customized a personal package with each photographer to ensure you receive all the features you’re looking for. By customizing your package, we were also able to secure special rates so that all packages are in your desired price range. <b>All prices already include HST, there are no additional charges.</b> By ensuring these little details, we hope we enable you to focus simply on the photographers' portfolios and personalities. 

<b>How to navigate:</b>
Scroll down to quickly compare all three photographers at a glance. Click on the photographer’s profile boxes to view their respective portfolios, package details, and reviews.";


$photographerName1 = "Jeremy";
$photo1 = "img/Jeremy/Distillery-District-Winter-Wedding.jpg";
$price1 = "<b>Price:</b> $3,833";
$experience1 = "<b>Experience:</b> 5 years";
$reviews1 = "<b>Overall Compatibility:</b> 94%";
$package1 = 
"<b>Package Perks:</b>
12 Hours of Coverage
2nd Photographer
3rd Videographer
Engagement Shoot
Wedding Videography 
2 DVDs of Video
1-yr Online Gallery

<b>Price:</b> $3,833
<i>(includes photography + videography)</i>";

$photographerName2 = "Roland";
$photo2 = "img/Roland/Stan-Diane-Engagement-Web-6.jpg";
$price2 = "<b>Price:</b> $2,509";
$experience2 = "<b>Experience:</b> 5 years";
$reviews2 = "<b>Overall Compatibility:</b> 89%";
$package2 = 
"<b>Package Perks:</b>
8 Hours of Coverage
2nd Photographer
Engagement Shoot

<b>Price:</b> $2,509";

$photographerName3 = "Hannah";
$photo3 = "img/Hannah/Hannah17.JPG";
$price3 = "<b>Price:</b> $2,750";
$experience3 = "<b>Experience:</b> 3 years";
$reviews3 = "<b>Overall Compatibility:</b> 87%";
$package3 = 
"<b>Package Perks:</b>
Full-day Coverage
2nd Photographer
Engagement Shoot

<b>Price:</b> $2,750";

$photographerCommon = 
"Included in all three: All photos are post-processed in non-watermarked HD resolution. Digital photos are available on DVD/USB. Each selected photographer has liability insurance and proper backup equipment.";

/*****************    Photographer 1    *************************/

//if first time visiting, or photographer 1 selected.
if (!isset($_GET["photog"]) || $_GET["photog"] == "1")
{
	$portfolio = array(
		"img/Jeremy/Distillery-District-Winter-Wedding.jpg",
		"img/Jeremy/12.jpg",		
		"img/Jeremy/2.jpg",	
		"img/Jeremy/9.jpg",		
		"img/Jeremy/13.jpg",				
		"img/Jeremy/11.jpg",
		"img/Jeremy/6.jpg",	
		"img/Jeremy/3.jpg",
		"img/Jeremy/1.jpg",
		"img/Jeremy/21.jpg",
		"img/Jeremy/Destination-Wedding-Photography-Spa-Getting-Ready.jpg",				
		"img/Jeremy/18.jpg",		
		"img/Jeremy/16.jpg",
		"img/Jeremy/7.jpg",		
		"img/Jeremy/14.jpg",
		"img/Jeremy/15.jpg",
		"img/Jeremy/22.jpg",
		"img/Jeremy/Cancun-Destination-Wedding-Photography-Toronto.jpg",
		"img/Jeremy/KW-Destination-Wedding-Photography.jpg",
		"img/Jeremy/Cancun-Saphhire-Wedding-Resort-Photographer.jpg",
		"img/Jeremy/Kitchener-Waterloo-Wedding-Photographer.jpg",
		"img/Jeremy/Kitchener-Destination-Wedding-Photography.jpg",
		);

	$photographerNote = 
	"<i>\"Taking pictures is savoring life intensely every hundredth of a second.\"</i>
	— Mark Riboud

	Jeremy’s work speaks for himself, and his level of impeccable professionalism is remarkable. He loves to savor every moment in the easiest way possible with simple posing, creative composition, and critical use of light. By bringing a unique upbeat energy to the wedding day, he has a special way of drawing out genuine emotions and the best smiles from his clients. He is particularly skilled at taking shots from different, unique angles, resulting in photos that stand out.

	His films portray the emotions, the details, and the love story of the wedding day in an enchanting manner.  His ability to coordinate photography and videography in the same day, without compromising the quality of either, is exceptional -- not many artists are able to conduct both with satisfying results.  ";


	$packageHeader = 
	"<b>Your wedding collection quote: $3,833</b>

	It includes 12 hours of coverage, professional 2nd photographer, 3rd videographer, an engagement shoot, professionally edited and retouched photos on USB, a 1-yr online protected gallery, a wedding love story video, and two DVDs with your video in MP4 formats. His videography and photography services are not mutually exclusive — he directs both in a way that captures the story of your entire day.

	If you want to consider more options, here is a detailed breakdown of Jeremy's package deals and items. Note that the following prices do not yet include HST.";


	$packageLeft = 
	"Basic starter: <b>$1,800</b>
	7 hours of coverage
	6 months of online protected gallery
	5% off videography packages

	Bronze edition: <b>$2,800</b>
	8 hours of coverage
	2nd photographer
	Engagement session
	2yr online protected gallery
	9.5x9.5 handmade Italian album
	15% off videography packages

	Silver edition: <b>$3,800</b>
	12 hours of coverage
	2nd photographer
	Engagement session
	3yr online protected gallery
	Mobile Smartphone gallery app
	DVD slideshow
	10x10 Engagement album
	16x12 handmade Italian album
	30% off videography packages

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
	35% off videography packages";

	$packageRight = 
	"<b>À la carte + Add-ons</b>

	Hourly rate <b>$200/hr</b>

	2nd photographer <b>$800</b>

	Assistant 2nd photographer <b>$400</b>

	High resolution photos on USB <b>$999</b>

	Engagement Photoshoot <b>$200</b>

	Pre-bridal session <b>$200</b>

	Post-trash the dress session <b>$200</b>

	Online gallery <b>$100/yr</b>

	Mobile Smartphone gallery app <b>$250</b>

	Photobooth session <b>$1,000</b>

	DVD slideshow <b>$400</b>

	Same-day slideshow <b>$400</b>

	Framed canvas acrylic <b>$250</b>

	Highlight film & Cinematography <b>$1,500</b>

	Wedding photo album (starting at) <b>$1,499</b>

	various prints & canvas options";

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



} else if ($_GET["photog"] == "2") {
	$portfolio = array(
		"img/Roland/Stan-Diane-Engagement-Web-6.jpg",
		"img/Roland/Nadia-Chris-Web-1.jpg",
		"img/Roland/Stan-Diane-Engagement-Web-9.jpg",
		"img/Roland/Steph-Cilian-Gallery-125.jpg",
		"img/Roland/steph-erwin-wedding_0017.jpg",
		"img/Roland/qssis-kristina-wedding-014.jpg",
		"img/Roland/Lauren-Chris-Wedding-Web-10.jpg",
		"img/Roland/qssis-kristina-wedding-024.jpg",
		"img/Roland/Marilyn-Jonathan-Gallery-23.jpg",
		"img/Roland/sharon-yushi-hart-house_0001.jpg",
		"img/Roland/Ed-Mae-Web-19.jpg",
		"img/Roland/rachael-miles-blog_0006.jpg",		
		"img/Roland/rachael-miles-blog_0041.jpg",		
		"img/Roland/rachael-miles-blog_0037.jpg",
		"img/Roland/Steph-Cilian-Gallery-12.jpg",
		"img/Roland/Steph-Cilian-Gallery-75.jpg",
		"img/Roland/Kevin-Sheila-140.jpg",
		"img/Roland/Steph-Cilian-Gallery-77.jpg",
		"img/Roland/steph-erwin-wedding_0004.jpg",
		"img/Roland/Ed-Mae-Web-117.jpg"
		);

	$photographerNote = 
	"<i>\"It is more important to click with people than to click the shutter.\"</i>
	- Alfred Eisenstaedt

	Roland is a photographer who goes above and beyond expectations, every time. With his cheerful, fun personality, he befriends his clients in a way that helps bring out their best and authentic selves for the photoshoot. Combined with his tasteful creativity and contagious energy, the result is an unforgettable experience and a collection of elegant photos that tell your story. He captures stolen moments and the meaningful details of your wedding in an unobstructive way."; 

	$packageHeader = 
	"<b>Your wedding collection quote: $2,509</b>
	Your custom quote includes 8 hours of coverage, a 2nd shooter, an engagement shoot, and a DVD of 400-500 edited HD photos.

	If you want to consider more options, here is a detailed breakdown of Roland's package deals and items.";


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
	2 photographers";


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
} else if ($_GET["photog"] == "3") {
	$portfolio = array(
		"img/Hannah/Hannah17.JPG",
		"img/Hannah/Hannah02.PNG",	
		"img/Hannah/Hannah19.JPG",			
		"img/Hannah/Hannah16.JPG",
		"img/Hannah/Hannah07.JPG",	
		"img/Hannah/Hannah08.JPG",
		"img/Hannah/Hannah10.JPG",
		"img/Hannah/Hannah04.JPG",
		"img/Hannah/Hannah12.JPG",
		"img/Hannah/Hannah03.JPG",
		"img/Hannah/Hannah26.JPG",		
		"img/Hannah/Hannah27.JPG",
		"img/Hannah/Hannah29.JPG",
		"img/Hannah/Hannah01.PNG",
		"img/Hannah/Hannah28.JPG",
		"img/Hannah/Hannah32.JPG",
		"img/Hannah/Hannah30.JPG",
		"img/Hannah/Hannah34.jpg",
		"img/Hannah/Hannah23.jpg",
		"img/Hannah/Hannah15.JPG",
		"img/Hannah/Hannah05.JPG",
		"img/Hannah/Hannah06.JPG",
		"img/Hannah/Hannah35.jpg",
		"img/Hannah/Hannah36.jpg",
		"img/Hannah/Hannah21.jpg",
		"img/Hannah/Hannah22.JPG",
		"img/Hannah/Hannah24.JPG"
		);

	$photographerNote = 
	"<i>\"A tear contains an ocean. A photographer is aware of the tiny moments in a persons life that reveal greater truths.\"</i>
	— Anonymous

	Hannah is one of the few who can truly claim the title of photojournalist. As a graduate from one of two photojournalist schools in Canada, she is professionally trained to capture real candid moments. From shooting for the press to covering rapid-paced events such as sports, she has the rare skills to anticipate and capture elusive moments that pass in the blink of an eye. As a result, her photos are completely natural and unposed, yet still manage to be elegant and picturesque. Her secret is reaching a deep level of personal connection with her clients. Furthermore, she is remarkably talented at turning the scenery and surrounding settings into creative advantages for her art.";

	$packageHeader = 
	"<b>Your wedding collection quote: $2,750</b>
	It includes a full-day coverage, a 2nd shooter, and an engagement shoot.

	If you want to consider more options, here is a detailed breakdown of Hannah's package deals and items.";

	$packageLeft = 
	"Classic wedding package: <b>$2,000</b>
	Full-day coverage";


	$packageRight = 
	"<b>À la carte + Add-ons</b>

	2nd photographer <b>$500</b>

	Engagement Photoshoot <b>$250</b>";

	$reviews = array(
		[
	    "comment" => "Our wedding day was absolutely perfect.  And I would only have trusted the day to be captured by Hannah. Hannah was professional, direct, and a pleasure to have as our wedding photographer.  She blended into every moment, like a stealthy photo ninja.  She didn't ever get in the way, and made us feel like this truly was OUR day, and she was just there to capture us and let us know we looked fabulous. Hannah has confidence in what she does, and it shows in her work. She took initiative to arrange and pose groups of people, and we enjoyed having her move us into some really creative poses!  (standing on posts, jumping, posing on and around farm equipment on the property). She was completely open to anybody's suggestions, and worked with us at our pace, rather than making any of us feel rushed, or out of place. My friends could NOT stop gushing over our wedding pictures, and we are SO proud to show them off!!  As a side note, Hannah also took our engagement photos, which were really fun and unique. She captured our personalities by taking fun candid photos in the forest.  If we had to do it all over again I would choose Hannah again and again! She's got the creativity, and the passion for this, and brings a positivity everywhere she goes, and those are the greatest photographers to stand with you on your wedding day.",
	    "author" => "Ara L."
	    ],
	    [
	    "comment" => "Hannah is such a talented artist and was a pleasure to work with as my wedding photographer! She listened well to the things that I hoped for in my wedding pictures, but made them happen in ways that I couldn't have asked for.  With everything that I had going on on the days leading up to the wedding and on the day of, it was so nice to have her there to listen, but also act as the director with an artistic vision. She was professional and understanding. She also understood the spirit of the event so well. I appreciate the risks that she took, she is fearless when she's with her camera! She is an excellent observer of the scenery and used it so well. I particularly remember when I asked if we could do pictures in the stream on the property that the reception was held.  She went with it, and also suggested that we take some while splashing water. These are some of my favorite pictures from the event. I wanted candid pictures that showcased the property, including the little details.  I have some phenomenal posed shots, too. Everyone who looks through the photos says how beautiful they are, and how they capture the spirit of the wedding they remember.",
	    "author" => "Ruth D."
	    ],
    );
}


include_once("personal.html");

?>