<?php
require 'sitefunctions.php';
// Gets fields
$title = $_POST["postitle"];
$date = htmlspecialchars($_POST["publishdate"]);
$content = $_POST["postcontent"];
$content = addslashes($content);
$date = prettyDate($date);
$uploads_dir = "../images/";
$tmp_name = $_FILES["feature"]["tmp_name"]; //The temporary file
$name = $_FILES["feature"]["name"]; // It's name
move_uploaded_file($tmp_name, "$uploads_dir/$name"); //Put it there

// Generates the post HTML file
$postHTML = '<h2 class="post-title">'. $title .'</h2>
			<h3 class="publish-date">'. $date .'</h3>
			<div class="content"><p class="content">'. $content .'</p></div>';


// Tidies up title
$title = preg_replace("~'|<|>|:~", "",$title);

// Makes the title a suitable filename 
$filetitle = makePathName($title);
$postfilename = "../posts/post-" . $filetitle . ".html";
fopen("../posts/post-" . $filetitle . ".html", "w");
file_put_contents($postfilename, $postHTML);

// Adds the title and link to the masterpost file (list of all posts)
$masterpostEntry = $date . "~" . $title . "~" . $filetitle;
$file = "../posts/master-allposts.txt";
$current = file_get_contents($file);
$pos = strpos($current, $masterpostEntry);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    // This entry was not found, continue
    $current .= $masterpostEntry . "^";
	file_put_contents($file, $current);
}

header('Location: ../admin.php');

?>