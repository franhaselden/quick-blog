<?php

// Gets fields
$sitetitle = htmlspecialchars($_POST["sitetitle"]);
$sitesub = htmlspecialchars($_POST["sitesubtitle"]);

// Puts the site info to files
file_put_contents('../settings/settings-sitename.html', $sitetitle);
file_put_contents('../settings/settings-sitesub.html', $sitesub);

header('Location:../admin.php');
?>