<?php 
	require_once("lib/html.php");
	$events = array();

	$event_full ="";
	if (isset($_GET['event_full'])) {
		$event_full = $_GET['event_full'];
	}
	for($i = 0; $i < 10; $i++){
		$event = new Event("img_0001.jpg", "Lorem ipsum dolor sit amet.", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum id risus ac dignissim. Donec cursus nulla in gravida rhoncus. Vivamus in leo nunc. Cras eget bibendum ante. Vivamus nec dictum ligula. Vestibulum nec placerat libero, ac semper arcu. Aenean et viverra diam, quis rhoncus massa. Cras lobortis condimentum ultrices. Sed rutrum euismod pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque luctus massa eget blandit porttitor. Vivamus pharetra dui vel neque semper vehicula.", "12/12/1999", "00:00", "wwww.test.be", "test@test.be", $i);
		array_push($events, $event);
	}

	$showResult = !(empty($event_full));

	if ($showResult){
		$event = $events[$event_full];
		$event->showFull();
		$content = $events[$event_full];
	}else{
		$content = new MyList($events, "list-group");
	}
		
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 </head>
 <body>
 	<div class = "container"><?php echo $content ?></div>
 </body>
 </html>