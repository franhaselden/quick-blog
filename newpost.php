<form action="functions/savepost.php" method="POST">
<article>
	<h3 class="admintitle">New Posts</h3>
	<label>Post title</label><br />
	<input type="text" name="postitle" id="postitle" required/><br />
	<label>Publish date</label><br />
	<input type="text" name="publishdate" id="publishdate" value="<?php echo date('l d F Y'); ?>" required/><br />
	<label>Post content</label><br />
	<small>Please use HTML to format your post</small><br />
	<textarea rows="4" cols="100" name="postcontent" id="postcontent" required></textarea><br />
	<input type="submit" value="Publish" class="button" />
</article>
</form>