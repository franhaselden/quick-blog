<?php

// Gets fields
$title = $_POST["postitle"];
$date = htmlspecialchars($_POST["publishdate"]);
$content = htmlspecialchars($_POST["postcontent"]);

// Generates the post HTML file
$postHTML = '<h2 class="post-title">'. $title .'</h2>
			<h3 class="publish-date">'. $date .'</h3>
			<p class="content">'. $content .'</p>';


// Tidies up title
$title = preg_replace("~'|<|>|:~", "",$title);

// Makes the title a suitable filename 
$filetitle = clean($title);
$postfilename = "../posts/post-" . $filetitle . ".html";
fopen("../posts/post-" . $filetitle . ".html", "w");
file_put_contents($postfilename, $postHTML);

// Adds the title and link to the masterpost file (list of all posts)
$masterpostEntry = $date . "~" . $title . "~" . $filetitle;
echo $masterpostEntry;
$file = "../posts/master-allposts.txt";
$current = file_get_contents($file);
$current .= $masterpostEntry . "^";
file_put_contents($file, $current);

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = strtolower($string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
};

//header('Location: ../admin.php');

?>