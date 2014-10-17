<?php
// Gets and outputs the posts in a table on the admin page

$masterpostlist = getPostList();
var_dump($masterpostlist);
echo '<br /><br />';

foreach ($masterpostlist as $post){
	$postParts = explode('~',$post);
	var_dump($postParts);
}

function getPostList(){
	$masterposts = "../posts/master-allposts.txt";
	$current = file_get_contents($masterposts);
	$masterpostlist = explode('^', $current);
	return $masterpostlist;
}

?>