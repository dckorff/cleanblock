<h1>Hello, I'm the template</h1>

<hr>

<h2>This could be whatever object/data you like:</h2>

<?php  
	$viewbag = $variables['elements']['#viewbag'];
	print_r($viewbag, false);
?>

<hr>

<h2>This is all the other stuff in $variables:</h2>

<?php
	print_r($variables, false);
?>

