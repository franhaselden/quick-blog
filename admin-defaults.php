<article id="postlist">
	<h3 class="admintitle">Recent Posts</h3>
	<?php include "functions/getposts.php"; ?>
	<p><a id="allposts" onclick="loadpage('allposts','pageload')"><i class="fa fa-list"></i>See all posts</a></p>
</article>
<article class="admin">
<?php
$title = "settings/settings-sitename.html";$title = file_get_contents($title);
$sub = "settings/settings-sitesub.html";$sub = file_get_contents($sub);
?>
	<h3 class="admintitle">Site Settings <span><a id="sitesettings" onclick="loadpage('sitesettings','pageload')"><i class="fa fa-pencil"></i>Edit</a></span></h3>
	<p><i class="fa fa-user"></i><strong>Site title:</strong> <?php echo $title; ?></p>
	<p><i class="fa fa-ellipsis-h"></i><strong>Site subtitle:</strong> <?php echo $sub; ?></p>
	<p><i class="fa fa-folder-open"></i><strong>Posts directory:</strong> posts/</p>
	<p></p>
</article>