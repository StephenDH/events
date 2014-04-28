<?php 
	require_once("lib/html.php");
	error_reporting(E_ALL);   
	ini_set('display_errors', 1);

	$host = "localhost";
	$dbname = "events";
	$user = "root";
	$pass = "";

	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 	$title ="";
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	}

	$picture ="";
	if (isset($_POST['picture'])) {
		$picture = $_POST['picture'];
	}

	$details ="";
	if (isset($_POST['details'])) {
		$details = $_POST['details'];
	}

	$datum ="";
	if (isset($_POST['datum'])) {
		$datum = $_POST['datum'];
	}

	$tijd ="";
	if (isset($_POST['tijd'])) {
		$tijd = $_POST['tijd'];
	}

	$website ="";
	if (isset($_POST['website'])) {
		$website = $_POST['website'];
	}

	$email ="";
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}



	$update = !(empty($title) && empty($picture) && empty($details) && empty($date) && empty($time) && empty($website) && empty($email));

	if ($update){
		//$event = new Event("1", $title, $picture, $details, $datum, $tijd, $website, $email);
		//$STH = $DBH->query("SELECT id, title, picture, details, date, time, website, email from evenementen");
		$STH = $DBH->prepare("INSERT INTO evenementen (title, picture, details, datum, tijd, website, email) values (:title, :picture, :details, :datum, :tijd, :website, :email)");
		//print_r((array)$event);
		$events_array = array("title"=>$title,"picture"=>$picture,"details"=>$details,"datum"=>$datum,"tijd"=>$tijd,"website"=>$website,"email"=>$email);
		//print_r($events_array);
		$STH->execute($events_array);
	}	
		// $event = $events[$event_full];
		// $event->showFull();
		// $content = $events[$event_full];
		
	$content = new Div(
		//new MyList($events, "list-group") .
		new Button(
			new Span("", array("class" => "glyphicon glyphicon-plus")) .
			" Add"
		, array("class" => "btn btn-default btn-lg", "type" => "button", "onclick" => "window.location.href='/EventsV2/add_event.php'"))
	, array("class" => "container"));
		
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 </head>
 <body>
 	<?php echo $content ?>
 </body>
 </html>