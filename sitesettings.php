<form action="functions/savesettings.php" method="POST">
<?php
// Gets settings and autofills
$title = "settings/settings-sitename.html";$title = file_get_contents($title);
$sub = "settings/settings-sitesub.html";$sub = file_get_contents($sub);
?>
<article>
	<h3 class="admintitle">Site settings</h3>
	<label><i class="fa fa-user"></i> Site title</label><br />
	<input type="text" name="sitetitle" id="sitetitle" value="<?php echo $title; ?>" required/><br />
	<label><i class="fa fa-ellipsis-h"></i> Site subtitle</label><br />
	<input type="text" name="sitesubtitle" id="sitesubtitle" value="<?php echo $sub; ?>" /><br />
	<input type="submit" value="Save settings" class="button" />
</article>
</form>