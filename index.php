<?php 
	//Library and errors
	require_once("lib/html.php");
	error_reporting(E_ALL);   
	ini_set('display_errors', 1);

	//Post variables
 	$title = post_var("title");
	$picture = post_var("picture");
	$details = post_var("details");
	$datum = post_var("datum");
	$tijd = post_var("tijd");
	$website = post_var("website");
	$email = post_var("email");

	$id = get_var("id");
	$save = get_var("save");

	$event_number = get_var("event_number");

	//Database variables
	$host = "localhost";
	$dbname = "events";
	$user = "root";
	$pass = "";

	//Open database
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	//Add an event
	$update = !(empty($title) && empty($picture) && empty($details) && empty($date) && empty($time) && empty($website) && empty($email));
	if ($update && empty($save)){
		$events_array = array("title"=>$title,"picture"=>$picture,"details"=>$details,"datum"=>$datum,"tijd"=>$tijd,"website"=>$website,"email"=>$email);
		$STH = $DBH->prepare("INSERT INTO evenementen (title, picture, details, datum, tijd, website, email) values (:title, :picture, :details, :datum, :tijd, :website, :email)");
		$STH->execute($events_array);
	}else if($update && !empty($save) && !empty($id)){
		$sql = "UPDATE evenementen SET 	title = :title, 
            						picture = :picture, 
            						details = :details,  
            						datum = :datum,
            						tijd = :tijd,  
            						website = :website,
            						email = :email  
            	WHERE 				id = :id";
		$STH = $DBH->prepare($sql);                                  
		$STH->bindParam(':title', $title, PDO::PARAM_STR);       
		$STH->bindParam(':picture', $picture, PDO::PARAM_STR);    
		$STH->bindParam(':details', $details, PDO::PARAM_STR);
		$STH->bindParam(':datum', $datum, PDO::PARAM_STR);
		$STH->bindParam(':tijd', $tijd, PDO::PARAM_STR); 
		$STH->bindParam(':website', $website, PDO::PARAM_STR);   
		$STH->bindParam(':email', $email, PDO::PARAM_STR); 
		$STH->bindParam(':id', $id, PDO::PARAM_INT);   
		$STH->execute(); 
	}

	//var_dump($event_number);
	$update = !empty($event_number);
	if ($update) {
		$STH = $DBH->query('SELECT * FROM evenementen WHERE id='.$event_number);
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$event_array = $STH->fetchAll();

		//Fill array with events
		$events = array();
		foreach ($event_array as $value) {
			$event = new event($value["id"], $value["title"], $value["picture"], $value["details"], $value["datum"], $value["tijd"], $value["website"], $value["email"]);
			//var_dump($event);
		}
		$event->showFull();
		
		$content=new Div($event, array("class" => "container"));
	}else{
		//Get all events
		$STH = $DBH->query('SELECT * FROM evenementen');
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$event_array = $STH->fetchAll();

		//Fill event with array and add event to a array.
		$events = array();
		foreach ($event_array as $value) {
			$event = new event($value["id"], $value["title"], $value["picture"], $value["details"], $value["datum"], $value["tijd"], $value["website"], $value["email"]);
			//var_dump($event);
			array_push($events, $event);
		}

		//Show events and add button
		$content = new Div(
			new MyList($events, "list-group") .
			new Button(
				new Span("", array("class" => "glyphicon glyphicon-plus")) .
				" Add"
			, array("class" => "btn btn-default btn-lg", "type" => "button", "onclick" => "window.location.href='/EventsV2/add_event.php'"))
		, array("class" => "container"));		
	}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<?php echo $titlePage.$css ?>
 </head>
 <body>
 	<?php echo $content ?>
 </body>
 </html>