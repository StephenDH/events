 <?php 
 	require_once("lib/html.php");

 	$content = new Div(
 		new Form(

 		,array("action"=>"index.php", "method"=>"post"))
 	,array("class" => "container"));
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<?php echo $title.$css ?>
 </head>
 <body>
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