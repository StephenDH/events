 <?php 
 	$title = "Add event"

  ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $title ?></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 </head>
 <body>
 	<div class = "container"><form>
 		<br>
 		<div class="input-group">
  			<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span></span>
 		<input type="text" name="title" placeholder="Event name" class="form-control">
 		</div><br>

 		<div class="input-group">
  			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
 			<input type="date"  name="date" class="form-control">
 			<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
 			<input type="time"  name="time" class="form-control">
 		</div><br>

 		<textarea name="details" cols="40" rows="5" placeholder="Event details" class="form-control"></textarea><br>
 		
 		<div class="input-group">
  			<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
 			<input type="email"  name="email" placeholder="name@example.com" class="form-control">
 		</div><br>

 		<div class="input-group">
  			<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
 			<input type="url"  name="website" placeholder="www.example.com" class="form-control">
 		</div><br>

 		<div class="input-group">
  		<span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
 			<input type="url"  name="pictue" placeholder="www.example.com/picture.jpg" class="form-control">
 		</div><br>
 	</form></div>
 </body>
 </html>