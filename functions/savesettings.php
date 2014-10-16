<?php

// Gets fields
$sitetitle = htmlspecialchars($_POST["sitetitle"]);
$sitesub = htmlspecialchars($_POST["sitesubtitle"]);
$postsdir = htmlspecialchars($_POST["postsdir"]);

// Puts the site info to files
file_put_contents('settings/settings-sitename.html', $sitetitle);
file_put_contents('settings/settings-sitesub.html', $sitesub);
file_put_contents('settings/settings-postsdir.html', $postsdir);

header('Location:admin.php');
?>