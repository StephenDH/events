 <?php 
 	require_once("lib/html.php");

 	$event_number = get_var("event_number");

 	$update = !empty($event_number);
 	if ($update) {
		//Database variables
		$host = "localhost";
		$dbname = "events";
		$user = "root";
		$pass = "";

		//Open database
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

 		$STH = $DBH->query('SELECT * FROM evenementen WHERE id='.$event_number);
		$STH->setFetchMode(PDO::FETCH_ASSOC);
		$event_array = $STH->fetchAll();

		foreach ($event_array as $value) {
			$id = $value["id"]; 
			$titleValue		= $value["title"];
			$pictureValue	= $value["picture"]; 
			$detailsValue	= $value["details"];
			$datumValue		= $value["datum"];
			$tijdValue		= $value["tijd"]; 
			$websiteValue	= $value["website"]; 
			$emailValue		= $value["email"];	
		}

		$save = "?save=true&id=$id";
 	}else{
 		$titleValue		= "";
		$pictureValue	= "";
		$detailsValue	= "";
		$datumValue		= "";
		$tijdValue		= ""; 
		$websiteValue	= "";
		$emailValue		= "";

		$save = "";
 	}

 	$content = new Div(
 		new Form(
 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-th-list"))
 						,array("class" => "input-group-addon")).
 					new Input("title", "text", array("placeholder" => "Event name", "class" => "form-control", "value" => "$titleValue"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-calendar"))
 						,array("class" => "input-group-addon")).
 					new Input("datum", "date", array("placeholder" => "Event name", "class" => "form-control", "value" => "$datumValue")).
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-time"))
 						,array("class" => "input-group-addon")).
 					new Input("tijd", "time", array("placeholder" => "Event name", "class" => "form-control", "value" => "$tijdValue"))
 				,array("class" => "input-group")).

 			new Br().
 			new TextArea("$detailsValue", "details", "40", "10", "text", array("placeholder" => "Event details", "class" => "form-control")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-envelope"))
 						,array("class" => "input-group-addon")).
 					new Input("email", "email", array("placeholder" => "name@example.com", "class" => "form-control", "value" => "$emailValue"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-globe"))
 						,array("class" => "input-group-addon")).
 					new Input("website", "url", array("placeholder" => "http://www.example.com", "class" => "form-control", "value" => "$websiteValue"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-picture"))
 						,array("class" => "input-group-addon")).
 					new Input("picture", "url", array("placeholder" => "http://www.example.com/picture.jpg", "class" => "form-control", "value" => "$pictureValue"))
 				,array("class" => "input-group")).

 			new Br().
 			new Input("button", "submit", array("value" => "Save" , "class" => "btn btn-default navbar-btn"))
 		,array("action"=>"index.php".$save, "method"=>"post"))
 	,array("class" => "container"));
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