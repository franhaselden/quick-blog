<?php
// Gets and outputs the posts in a table on the admin page

$masterposts = "../posts/master-allposts.txt";
$current = file_get_contents($masterposts);
$current = rtrim($current, "^");
$masterpostlist = explode('^', $current);

foreach ($masterpostlist as &$post){
    $post = explode('~',$post);
}

$new = [];

foreach ($masterpostlist as $inner) {
    $new[] = [
        "date" => $inner[0],
        "title" => $inner[1],
        "filepath" => $inner[2]
    ];
}
$masterpostlist = $new;
usort($masterpostlist, "sortFunction");
$rowcounter = 0;

echo "<table border='2'><tbody><tr>";
foreach ($masterpostlist as $post){
	echo "<td>" . $post['title'] . "</td>";
	$rowcounter++;
	echo "<td><a href='../posts/post-" . $post['filepath'] . ".html'>View</a></td>";
	$rowcounter++;
	echo "<td><a href='../posts/post-" . $post['filepath'] . ".html?edit=true'>Edit</a></td>";
	$rowcounter++;
	if ($rowcounter == "3"){
		$rowcounter = 0;
		echo "</tr><tr>";
	}
}
echo "</tr></tbody></table>";


function sortFunction( $a, $b ) {
    return strtotime($a["date"]) - strtotime($b["date"]);
}


/*
array(4) {

	[0]=> array(3) {
		[date]=> string(10) "2013-09-18"
		[title]=> string(75) "Ready For Retina HD: Create Pixel-Perfect Assets For Multiple Scale Factors"
		[filepath]=> string(74) "ready-for-retina-hd-create-pixel-perfect-assets-for-multiple-scale-factors"
	}
	[1]=> array(3) {
		[date]=> string(10) "2010-10-20"
		[title]=> string(40) "Taking A Closer Look At Tech Conferences"
		[filepath]=> string(40) "taking-a-closer-look-at-tech-conferences"
	}
	[2]=> array(3) {
		[date]=> string(10) "2014-10-19"
		[title]=> string(29) "Wayfinding For The Mobile Web"
		[filepath]=> string(29) "wayfinding-for-the-mobile-web"
	}
	[3]=> array(3) {
		[date]=> string(10) "2014-05-15"
		[title]=> string(24) "Freebie: Icons Of Autumn"
		[filepath]=> string(23) "freebie-icons-of-autumn"
	}
}*/


?>