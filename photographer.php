
<?
//phpinfo();
date_default_timezone_set("America/Toronto");

require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('6AfySMVdTj3rlMdlbEfMZsXDODNt3qN1hjkKgkFL', 'PbOHLiTseJGbESn9R7SJtERiojVmrMPGlIvSDfQW', 'YpPLLthhGPY6PhnayNvULNKIU3EALd1SmFL6ZRSG');

use Parse\ParseObject;

if (isset($_POST["action"])) {
	
	//Create new Parse.com object
	$consumer = new ParseObject("Consumer");

	//check that variables exist
	if (isset($_POST["searchForLocation"])) {
		$searchLocation = htmlspecialchars($_POST["searchForLocation"]);
		$consumer->set("searchLocation", htmlspecialchars($_POST["searchForLocation"]));
	}
	if (isset($_POST["searchForDate"])) {
		$searchDate = htmlspecialchars($_POST["searchForDate"]);
		$consumer->set("searchDate", htmlspecialchars($_POST["searchForDate"]));
	}

	try {
	  $consumer->save();
	  echo 'New object created with objectId: ' . $consumer->getObjectId();
	} catch (ParseException $ex) {  
	  // Execute any logic that should take place if the save fails.
	  // error is a ParseException object with an error code and message.
	  echo 'Failed to create new object, with error message: ' + $ex->getMessage();
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Merienda:400,700|Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/photographer.css">
</head>
<body>
	<br>
	<div style="text-align:center">
		<form action="photographer.php" method="post" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="city-name">City Name</label>
				<input type="text" class="form-control input-lg city-name" placeholder="City Name" name="searchForLocation">
			</div>
			<div class="form-group">
				<label class="sr-only" for="day">Day</label>
				<input class="datepicker form-control input-lg" type="text" placeholder="Day   (not necessary)" readonly="readonly" name="searchForDate">
			</div>
			<button type="submit" name="action" value="Search" class="btn btn-primary btn-lg">Search</button>
		</form>
	</div>


	<h1 class="merienda">FotoFox</h1>
	<h1 class="lobster">FotoFox</h1>
	<h1 class="merienda">Foto<span style="color:#F58426;">Fox</span></h1>
	<h1 class="lobster">Foto <span style="color:#F58426;">Fox</span></h1>
	<br>
	<h1 class="kaushan">FotoFox</h1>
</body>
</html>