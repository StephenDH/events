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
 			new TextArea("", "details", "40", "10", "text", array("placeholder" => "Event details", "class" => "form-control")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-envelope"))
 						,array("class" => "input-group-addon")).
 					new Input("email", "email", array("placeholder" => "name@example.com", "class" => "form-control"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-globe"))
 						,array("class" => "input-group-addon")).
 					new Input("website", "url", array("placeholder" => "http://www.example.com", "class" => "form-control"))
 				,array("class" => "input-group")).

 			new Br().
 			new Div(
 					new Span(
 							new Span(
 									""
 								,array("class" => "glyphicon glyphicon-picture"))
 						,array("class" => "input-group-addon")).
 					new Input("picture", "url", array("placeholder" => "http://www.example.com/picture.jpg", "class" => "form-control"))
 				,array("class" => "input-group")).

 			new Br().
 			new Input("button", "submit", array("value" => "Save" , "class" => "btn btn-default navbar-btn"))
 		,array("action"=>"index.php", "method"=>"post"))
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