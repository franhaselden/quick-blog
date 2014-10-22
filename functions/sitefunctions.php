<?php

// This function is used to scan the directory and return the posts in an array called $posts
// Call it whenever you need to get all the post data
function postArray(){
	// Scans the "posts" directory
	$dir    = 'posts';
	// Brings back an array of all files found there
	$files = scandir($dir);
	// Filters out the array to only include files that begin with "post-"
	$posts = array_filter(
	    $files,
	    function($value) {
	        return (strpos($value, 'post-') === 0);
	    }
	);
	// Returns the array
	return $posts;
	}


// This function is used to sort by date order - newest to oldest.
// If you want to sort oldest - newest, swap a and b around in the function
function sortFunction( $a, $b ) {
    return strtotime($b["date"]) - strtotime($a["date"]);
}

// This function handles taking a title and making it into a pathname
// It strips all punctuation and adds dashes where there were previously spaces
function makePathName($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with dashes.
   $string = strtolower($string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
};

// This function grabs the post array (through postArray() function) and outputs an excerpt of all posts
function getTheExcerpt($post){
	$postfile = file_get_contents($post);
	$fullpost = getBetween('<div class="content">',"&nbsp;</div>",$postfile);
	$postExcerpt = trimText($fullpost,750);
	return $postExcerpt;
}

function getTheTitle($post){
	$postfile = file_get_contents($post);
	$postTitle = getBetween('<h2 class="post-title">',"</h2>",$postfile);
	return $postTitle;
}

function getTheDate($post){
	$postfile = file_get_contents($post);
	$postDate = getBetween('<h3 class="publish-date">',"</h3>",$postfile);
	$originalDate = $postDate;
	$newDate = date('d F Y', strtotime($originalDate));
	return $newDate;
}

// This function is used to get a string between two delimiters (e.g content between <tags>)
function getBetween($var1="",$var2="",$pool){
	$temp1 = strpos($pool,$var1)+strlen($var1);
	$result = substr($pool,$temp1,strlen($pool));
	$dd=strpos($result,$var2);
	if($dd == 0){
	$dd = strlen($result);
	}
	return substr($result,0,$dd);
	}

// This function trims text to the nearest word, just pass it the string and your defined length
function trimText($input, $length) {
    // If the text is already shorter than the max length, then just return unedited text.
    if (strlen($input) <= $length) {
        return $input;
    }
    // Find the last space (between words we're assuming) after the max length.
    $last_space = strrpos(substr($input, 0, $length), ' ');
    // Trim
    $trimmedText = substr($input, 0, $last_space);
    // Add ellipsis.
    $trimmedText .= '...';
    return $trimmedText;
}

// This function opens the master post file and gets all the contents
function getMasterpostList(){
	$masterposts = "posts/master-allposts.txt";
	$current = file_get_contents($masterposts);
	return $current;
}

// This function "explodes" the master post list using the delimiter '^' to get each individual part in an array 
function masterPostExplode($current){
	$current = rtrim($current, "^");
	$masterpostlist = explode('^', $current);
	return $masterpostlist;
}


?>