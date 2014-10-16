<?php

// Gets fields
$title = htmlspecialchars($_POST["postitle"]);
$date = htmlspecialchars($_POST["publishdate"]);
$content = htmlspecialchars($_POST["postcontent"]);

// Generates the post HTML file
$postHTML = '<h2 class="post-title">'. $title .'</h2>
			<h3 class="publish-date">'. $date .'</h3>
			<p class="content">'. $content .'</p>';

// Makes the title a suitable filename 
$title = clean($title);
//$postfilename = "post-" . $title . ".html";
$postfile = fopen("/../posts/post-" . $title . ".html", "w");
//file_put_contents($postfilename, $postHTML);

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = strtolower($string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

?>