<?php include 'parts/html-header.php' ?>
<form action="savesettings.php" method="POST">
	<legend>Site Settings Admin</legend>
	<label>Site title</label><br />
	<input type="text" name="sitetitle" id="sitetitle" required/><br />
	<label>Site subtitle</label><br />
	<input type="text" name="sitesubtitle" id="sitesubtitle" /><br />
	<label>Posts directory</label><br />
	<small>The posts directory name in the root. e.g root/posts</small><br />
	root/<input type="text" name="postsdir" id="postsdir" /><br />
	<input type="submit" value="Save settings" class="button"/>
</form>
<?php include 'parts/footer.php' ?>