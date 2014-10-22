<form action="functions/savepost.php" method="POST" enctype="multipart/form-data">
<article>
	<h3 class="admintitle">New Posts</h3>
	<label>Post title</label><br />
	<input type="text" name="postitle" id="postitle" required/><br />
	<label>Publish date</label><br />
	<input type="date" name="publishdate" id="publishdate" value="<?php echo date("Y-m-d");?>" required/><br />
	<label>Post content</label><br />
	<small>Please use HTML to format your post</small>
	<span class="htmlHelper">Automatically add break tags on "Enter" <i onclick="toggleHTMLHelper()" id="helperToggle" class="fa fa-toggle-off"></i></span>
	<textarea rows="4" cols="100" name="postcontent" id="postcontent" required></textarea><br />
	<label>Feature Image (optional)</label><br />
	<input type="file" id="feature" name="feature" accept="image/*"><br />
	<input type="submit" value="Publish" class="button" />
</article>
</form>