<form action="newpost.php" method="POST">
<fieldset>
	<legend>New Post</legend>
	<label>Post title</label><br />
	<input type="text" name="postitle" id="postitle" required/>
	<label>Publish date</label><br />
	<input type="date" name="publishdate" id="publishdate" value="<?php  date('l d F Y'); ?>" required/>
	<label>Post content</label><br />
	<textarea rows="4" cols="50" name="postcontent" id="postcontent" required></textarea>
	<input type="submit" value="Publish" />
</fieldset>
</form>