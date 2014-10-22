/* All functions in here are used across various areas of the site, mainly the admin panel */

/* Turns on htmlHelper */
function toggleHTMLHelper(){
    var helperToggle = document.getElementById("helperToggle");
    var helperToggleState = helperToggle.className;
    if(helperToggleState == "fa fa-toggle-off"){
       $( "#postcontent" ).attr( "onfocus", "htmlHelper()" );
       $( "#helperToggle" ).removeClass("fa-toggle-off");
       $( "#helperToggle" ).addClass("fa-toggle-on");
    }else if(helperToggleState == "fa fa-toggle-on"){
       $( "#postcontent" ).removeAttr( "onfocus", "htmlHelper()" );
       $( "#helperToggle" ).removeClass("fa-toggle-on");
       $( "#helperToggle" ).addClass("fa-toggle-off");
    }
}

// This function allows users to copy the link from the text area on the link page
function copyLink(textID,copyID){
  // Adds to clipboard
  var link = document.getElementById(copyID).value;

  // Changes the "copy link" bit - visual feedback
  document.getElementById(copyID).innerHTML = '<i class="fa fa-link"></i> Copied!';
  $("#" + copyID).addClass("copied");
  var delay = setTimeout(function(){
        $("#" + copyID).removeClass("copied");
         document.getElementById(copyID).innerHTML = '<i class="fa fa-link"></i> Copy link';
     }, 1200)

}

// This function helps out with some HTML formatting while typing new posts
function htmlHelper(){
	$("#postcontent").keypress(function(e) {
    if(e.which == 13) {
        var currentHTML = document.getElementById("postcontent").value;
        var currentHTML = currentHTML + "\n<br /><br />"
        document.getElementById("postcontent").value = currentHTML;
    }
});
}

// This function loads in the default admin screen
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

// This function loads in the relevant file when a menu option is clicked. All it needs is the name of the file passed to it
function loadpage(filename,section){
  $('.selected').removeClass('selected');
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

// This function handles loading of posts in the INDEX section, so what the visitor sees
function loadPost(filepath,section){

}
