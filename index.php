<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Off Borders</title>
<meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0;">
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-92524199-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-92524199-2');
</script>

</head>

<body>
<div class="logo"><img src="logo.png" alt="LOGO"></div>


<!-- start main navigation Code: https://www.w3schools.com/howto/howto_js_navbar_sticky.asp-->
<!--navigation bar block-->
<div id="navbar">
  <a href="index.php">Home</a>
  <a href="blog.php">Blog</a>
  <a href="contact.html">Contact</a>
</div>
<!--navigation bar block end-->

<script>
	
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
	
</script>


<!-- main content here -->

<div class="box">
<div><video id="video" playsinline autoplay muted loop controls >
<source src="" type="video/webm">
<source src="offborders.mp4" type="video/mp4">
Your browser does not support HTML5 video.
</video></div>
</div>
    

    

<form action="newsletter-add.php" method="post">
<div class="container">
    <h2>Subscribe to our Newsletter</h2>
    <p>Get the most recent trends in Azores islands!</p>
    <input type="text" name="name" placeholder="Name"  required><br>
    <input type="email" name="email" placeholder="Email"  required><br><br>
    <input type="submit" name="cmd" value="Subscribe">
</div>

</form>	


	
    
    

<div class="footer">
This project is for educational purposes only.<br>Copyright &copy; 2017 Off Borders
</div>
	


</body>
</html>