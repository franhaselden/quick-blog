<?php
// Gets and outputs the posts in a table on the admin page
$masterposts = "posts/master-allposts.txt";
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
echo "<table border='0'><tbody>";
foreach ($masterpostlist as $post){ // One iteration per row
    echo '<tr>'; // Row STARTS here.

    echo "<td><p>" . $post['title'] . "</p></td>";
    echo "<td><span><a href='../posts/post-" . $post['filepath'] . ".html'><i class='fa fa-eye'></i>View</a></span></td>";
    echo "<td><span><a href='../posts/post-" . $post['filepath'] . ".html?edit=true'><i class='fa fa-pencil'></i>Edit</a></span></td>";

    echo '</tr>'; // Row ENDS here.
}
echo "</tbody></table>";

function sortFunction( $a, $b ) {
    return strtotime($a["date"]) - strtotime($b["date"]);
}
?>