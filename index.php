<?php 
	require_once("lib/html.php");
	$content = new MyList([new ListItem("test", "list-group-item", "a")], "list-group");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php echo $content ?>
 </body>
 </html>