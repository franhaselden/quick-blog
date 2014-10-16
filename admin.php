<?php include 'parts/html-header.php' ?>
<main class="admin" onload="loadDefaults()">
		<aside>
				<h1><span>Blog</span>Cube <i class="fa fa-cube"></i></h1>
					<a id="newpost" onclick="loadpage('newpost','pageload')"><i class="fa fa-plus"></i>Add new post</a><br />
					<a id="getlink" href=""><i class="fa fa-chain"></i>Get a post link</a><br />
					<a id="addpic" href=""><i class="fa fa-photo"></i>Add to picture library</a><br />
					<a id="tags" href=""><i class="fa fa-tags"></i>Create new post tags</a><br />
					<a href="index.php"><i class="fa fa-home"></i>See your blog</a><br />
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

function loadDefaults(){
	$("#back").hide();
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("pageload").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","admin-defaults.php",true);
xmlhttp.send();
$('.selected').removeClass('selected');

}

function loadpage(filename,section){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(section).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",filename + ".php",true);
xmlhttp.send();
$("#back").fadeIn("fast");
$("#" + filename).addClass("selected");
}

</script>

<?php include 'parts/footer.php' ?>