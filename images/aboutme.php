<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
<title>Ruth Garcia Gavilanes</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="Ruth Garcia"/>
<meta name="description" content="FTM" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script src="datelastmod.js" type="text/javascript"></script> 
<!-- This is the file to display the date where this page was last modified -->
<style>

#conash3D0

{

display:none;

}

</style> 




<!-- This is for google analytics--> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17766390-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body>
 <!-- Ruth García Gavilanes Webpage Based on a template found on the web -->
<?php
include "variables.php";

$var = new linking();
$links = $var->readlinks();

?>
 
<div id="container">
	
	<div id="banner">
		<div id='bannertitle'>Ruth Garcia Gavilanes</div>
	</div>

	<div id="outer">
 		<div id="inner">
  			<div id="left">
  				<div class="verticalmenu">
			   	<ul>
     					<li><a href= <?php echo $links[0]; ?> >Home</a></li>
     					<li><a href= <?php echo $links[1]; ?> >CV & Publications</a></li>
     					<li><a href= <?php echo $links[2];  ?> target = _blank>My Blog</a></li>
     					<li><a href= <?php echo $links[3]; ?>>Recommendations</a></li>
     					<li><a href= <?php echo $links[4]; ?>>Some Pictures</a></li>
     					<li><a href= <?php echo $inks[5]; ?>>Classes?</a></li>
     					<li><a href=<?php echo $links[6]; ?>>Translations</a></li>
     					<li><a href= <?php echo $links[7]; ?>>About me</a></li>
    				</ul>
 				</div> 
   		</div>

<div id="content"><h2>About me</h2>

<p>	
I was born on January 16 in Ecuador, one of the most biodiverse countries of the world. 
I have two sisters Belen and Sofia. Belen is my younguest sister and greatest inspiration. Sofia is a future top pshycologist living in paradise (New Zealand) with my cuñado Johny, eating healthy and going to fish and play golf.My father is a diplomat and my mother is in charge of the Central University's Library of Medicine in Quito. 
I have lived in many places, some thanks to my  dad and some by myself. I lived in Quito (Ecuador), Brasilia (Brazil), New York (USA), Seattle (USA), Beijing (China) and Barcelona (Spain).
I have also taveled to many places. Thanks to this, I learned to love where I come from and respect different opinions about anything.  
</p>
<p>	
In 2009 I came to Barcelona to do my Masters after which I decided to pursue a PHD. Right now I am trying to give my best to the Scientific world and to life.
</p>
<p>
To be continued...
</p>
<div class="centered">
<img src="images/mosaicflower.jpg" alt="CSS 40px by 40px image" class="test-reduced50" />
</div> 

<p class="centered"> ruth.garcia@upf.edu</p>
<p class="centered"> @ruthygarcia</p>

</div><!-- end content -->
</div><!-- end inner -->
</div><!-- end outer -->

<div id="footer"><h1> Last Updated:  
<script language=JavaScript type="text/javascript"><!--
 document.write( date_lastmod() );//--></script> 
</h1></div>
</div><!-- end container -->





</body>
<div class="twitters">
<script src="widget.js"> </script>

<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
   width: 190,
  height: 200,
  
  theme: {
    shell:  {
      background: '#dddddd',
      color: '#564b47'
    },
    tweets: {
      background: '#e7e7e7',
      color: '#6e686e',
      links: '#9d1ebd'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('ruthygarcia').start();
</script>
</div> 

</html>
