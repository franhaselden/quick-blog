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
?>