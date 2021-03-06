<?php include 'parts/html-header.php' ?>
<main class="admin" onload="loadDefaults()">
		<aside>
				<h1><a onclick="loadpage('admin-defaults','pageload')"><span>Blog</span>Cube <i class="fa fa-cube"></i></a></h1>
					<a class="sidebar" id="newpost" onclick="loadpage('newpost','pageload')"><i class="fa fa-plus"></i>Add new post</a><br />
					<a class="sidebar" id="getposts-links" onclick="loadpage('getposts-links','pageload')"><i class="fa fa-chain"></i>Get a post link</a><br />
					<a class="sidebar" id="image-upload" onclick="loadpage('image-upload','pageload')"><i class="fa fa-photo"></i>Add to picture library</a><br />
          			<a class="sidebar" id="image-library" onclick="loadpage('image-library','pageload')"><i class="fa fa-paint-brush"></i>See picture library</a><br />
					<a class="sidebar" id="tags" onclick="loadpage('tags','pageload')"><i class="fa fa-tags"></i>Create new post tags</a><br />
					<a class="sidebar" id="sitesettings" onclick="loadpage('sitesettings','pageload')"><i class="fa fa-cog"></i>Edit site settings</a><br />
					<a class="sidebar" href="index.php"><i class="fa fa-home"></i>See your blog</a><br />
		</aside>
		<section>
			<h2><i class="fa fa-dashboard"></i>Dashboard 
				<span id="back" onclick="loadDefaults()"><a><i class="fa fa-chevron-left"></i> Back</a></span>
			</h2>
			<div id="pageload">
				<!-- This is where the AJAX loads in -->
			</div>
		</section>
</main>

<style>
	<?php include 'css/admin.css' ?>
</style>
<script>
$(window).load(function() {
 loadDefaults();
});
</script>

<?php include 'parts/footer.php' ?>