<html>
<head>
<link rel="stylesheet" href="main.php"/>
<link rel="stylesheet" href="login.php"/>
<link rel="stylesheet" href="contact.php"/>
<link rel="stylesheet" href="recent_news_style.css"/>
<link type="text/css" rel="stylesheet" href="main_style.css"/>
 <script type="text/javascript" src="time_script.js"></script>
 <script src="file/jquery.js" type="text/javascript"></script>
 <script src="file/jquery.cycle.all.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function()
  {
	  $('#slider_image').cycle('fadeZoom');
  }
  );
  </script> 
</head> 
 <body onLoad="renderTime()">
 
<div class="container dark ">
   <div   class="wrapper" id="top_div" >
     <div id="top_left">
	     <a href="mailto:khondakarfahad@gmail.com">khondakarfahad@gmail</a>
	 </div>
	 <div id="top_right"> 
	     <a href ="callto:01682278264">mobile:01682278264</a>
	 </div>
	 <div id="clear"></div>
   </div> 
</div>

<div class="container light"> 
<div class="wrapper">
   <div id="logo_left">
	  <img src="image/icon.jpg" align="left"/>
   </div>
   <div id="logo_right">
   
   <form>
   <input id="textboxstyle" type="text" name="textbox"/>  
   <input id ="searchstyle" type="button" name="search" value="search"/>
   <div id="clockdisplay" class="container1"></div>   
   
   <div id="network">
   <a href="http://www.google.com">
   <img src="image/google-icon.png" height=36px width=45px/>
   </a>
   <a href="http://www.facebook.com">
   <img src="image/facebook-icon.png" height=40px width=45px/>
   </a>
   <a href="http://www.twitter.com">
   <img src="image/twitter-icon.png" height=40px width=45px/>
   </a>
   </div> 
  </form>
         
   </div>
   <div id="clear"></div> 
</div>
</div>

<div class="container dark">
<div class="wrapper">
      <ul>
	  <li>
	  <a href="recent_news.php"></a><a href="main.php">HOME</a>
	  </li>
	  <li>
	  <a href="recent_news.php"></a><a href="recent_news.php">RECENT NEWS</a>
	  </li>
	  <li>
	  <a href="recent_news.php"></a><a href="login.php">PAYROLL SHEET</a>
	   </li>
	  <li>
	  <a href="recent_news.php"></a><a href="contact.php">EMPLOYEE</a>
	  </li>
	  </ul>  
	  <div id="clear"></div>
</div>
</div>

<div class="container">
<div class="wrapper">
    <div id="slider_image">
	<img src="image/FB_IMG_14957810026728900.jpg"/>
	<img src="image/FB_IMG_14957809952844290.jpg"/>
	<img src="image/FB_IMG_14957810087423894.jpg"/>
	<img src="image/FB_IMG_14957810156310368.jpg"/>
	</div>
</div>
</div>

<div class="container">
<div class="wrapper">
	   <div id="aboutcompany_image">
	   <img src="image/icon2.png" onmouseover="this.src='image/icon3.png'" onmouseout="this.src='image/icon2.png'" height=100px width=100px/>
	   </div>
	   <div>
	   <h2><marquee align="right"> Welcome To Our Company Website</marquee></h2>
	   </div>
</div>
</div>
<div id="recent_news">
<h2>
<p>
<a href="http://www.google.com">Meeting Date</a>
</p>
<p>
<a href="http://www.google.com">Celebration/party_date</a>
</p>
</h2>
<div id="clear"></div>
</div>
</body>
</html>