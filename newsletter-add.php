<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Off Borders Newsletter</title>
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
<div class= "results">

	<?php

	$n = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('Missing/illegal paramer name');
	$e = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Missing/illegal paramer email');
	
	$sql = 'INSERT INTO newsletter (name, email) VALUES (?,?)';
	
	require_once('db_con.php');
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $n, $e);
	
	$stmt->execute();
	
	if($stmt->affected_rows > 0){
	
	    echo '<div class="container"> We added <div class="email">'.$e.'</div> to Off Borders newsletter!';
		
	}
	else {
		echo 'Could not add you to the list - you are already there ;-)';
}

?>
	</div>	


	
</body>
</html> 