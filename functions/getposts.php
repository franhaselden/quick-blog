<?php
// Gets and outputs the posts in a table on the admin page

$masterposts = "../posts/master-allposts.txt";
$current = file_get_contents($masterposts);
$masterpostlist = explode('^', $current);

foreach ($masterpostlist as &$post){
    $post = explode('~',$post);
    var_dump($post);
}


?>