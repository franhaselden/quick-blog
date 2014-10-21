<article id="postlist">
    <h3 class="admintitle">Get Post Links</h3>

    <?php
    // Gets and outputs the posts in a table on the admin page
    $masterposts = "posts/master-allposts.txt";
    $current = file_get_contents($masterposts);

    if ($current == ""){
    echo "No posts to display";
    }else{
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
    $counter = 0;
    echo "<table class='allpostlinks' border='0'><tbody>";
    foreach ($masterpostlist as $post){ // One iteration per row

        // Build link
        $link = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "/posts/post-" . $post['filepath'] . ".html";
        $link = str_replace("/getposts-links.php","",$link);
        $counter++;
        echo '<tr>';
        echo "<td><p>" . $post['title'] . "</p></td>";

        echo "<td class='postlink'><textarea id='textarea-'".$counter."'>".$link."</textarea><span></span></td>";

        $copylink = '<td class="copy"><p id="copy-'.$counter.'" onclick="copyLink(\'textarea-'.$counter.'\',\'copy-'.$counter.'\')"><i class="fa fa-link"></i> Copy link</p></td>';
        echo $copylink;


        echo '</tr>';
    }
    echo "</tbody></table>";
    }  

    function sortFunction( $a, $b ) {
        return strtotime($b["date"]) - strtotime($a["date"]);
    }
    ?>
   
</article>