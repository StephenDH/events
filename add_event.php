 <?php 
 	require_once("lib/html.php");

 	$content = new Div(
 		new Form(
 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-th-list"))
 						,array("class" => "input-group-addon")).
 					new Input("title", "text", array("placeholder" => "Event name", "class" => "form-control"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-calendar"))
 						,array("class" => "input-group-addon")).
 					new Input("datum", "date", array("placeholder" => "Event name", "class" => "form-control")).
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-time"))
 						,array("class" => "input-group-addon")).
 					new Input("tijd", "time", array("placeholder" => "Event name", "class" => "form-control"))
 				,array("class" => "input-group")).

 			new Br().
 			new TextArea("", "details", "40", "5", "text", array("placeholder" => "Event details", "class" => "form-control"))
 		,array("action"=>"index.php", "method"=>"post"))
 	,array("class" => "container"));
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<?php echo $title.$css ?>
 </head>
 <body>
 	<?php echo $content ?>
 	<div class = "container">
 		<form action="index.php" method="post">
	 		<br>
	 		<div class="input-group">
	  			<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
	 			<input type="text" name="title" placeholder="Event name" class="form-control">
	 		</div>

	 		<br>
	 		<div class="input-group">
	  			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
	 			<input type="date"  name="datum" class="form-control">
	 			<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
	 			<input type="time"  name="tijd" class="form-control">
	 		</div>

	 		<br>
	 		<textarea type="text" name="details" cols="40" rows="5" placeholder="Event details" class="form-control"></textarea>

	 		<br>
	 		<div class="input-group">
	  			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
	 			<input type="email"  name="email" placeholder="name@example.com" class="form-control">
	 		</div>

	 		<br>
	 		<div class="input-group">
	  			<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
	 			<input type="url"  name="website" placeholder="www.example.com" class="form-control">
	 		</div>

	 		<br>
	 		<div class="input-group">
	  		<span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
	 			<input type="url"  name="picture" placeholder="www.example.com/picture.jpg" class="form-control">
	 		</div>

	 		<br>
	 		<input type ="submit">
	 	</form>
 	</div>
 </body>
 </html>