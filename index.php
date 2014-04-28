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

	$STH = $DBH->query('SELECT * FROM evenementen');
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	$event_array = $STH->fetchAll();
	//var_dump($event_array);
	$events = array();
	foreach ($event_array as $value) {
		$event = new event($value["id"], $value["title"], $value["picture"], $value["details"], $value["datum"], $value["tijd"], $value["website"], $value["email"]);
		//var_dump($event);
		array_push($events, $event);
	}
	//var_dump(new event($event_array["id"], $event_array["title"], $event_array["picture"], $event_array["details"], $event_array["datum"], $event_array["tijd"], $event_array["website"], $event_array["email"]));

 	$title = postVar("title");
	$picture = postVar("picture");
	$details = postVar("details");
	$datum = postVar("datum");
	$tijd = postVar("tijd");
	$website = postVar("website");
	$email = postVar("email");

	$update = !(empty($title) && empty($picture) && empty($details) && empty($date) && empty($time) && empty($website) && empty($email));

	if ($update){
		$events_array = array("title"=>$title,"picture"=>$picture,"details"=>$details,"datum"=>$datum,"tijd"=>$tijd,"website"=>$website,"email"=>$email);
		$STH = $DBH->prepare("INSERT INTO evenementen (title, picture, details, datum, tijd, website, email) values (:title, :picture, :details, :datum, :tijd, :website, :email)");
		$STH->execute($events_array);
	}	
		// $event = $events[$event_full];
		// $event->showFull();
		// $content = $events[$event_full];
	

	$content = new Div(
		new MyList($events, "list-group") .
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