<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Off Borders Travel Blog</title>
<meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0;">
<link href="blogstyle.css" rel="stylesheet" type="text/css">
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

<div id="header"><img src="header3.png" alt="" /></a></div>



<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Why Azores is the perfect destination?</h2>
      <h5>By Margarida Batista, Dec 20, 2017</h5>
		<div class="img"><img src="pic1 (8).jpg" alt="POST"></div>
      <p>Azores Islands are Europe’s answer to Hawaii and also considered as one of the most sustainable travel destinations in the world. <br>Travellers will find themselves in a dramatic landscape with black sand beaches and beautiful small towns and villages that feel like stepping back to a gentler time. The islands are also an activity lover’s delight where people can hike and mountain bike down country lanes fringed with hordes of azaleas and hydrangeas, or hike up dormant volcanoes. At sea, nature lovers will be in for a treat – they can go whale watching, swim with dolphins or dive with manta rays. [Source: ABTA, 2017]</p>
    </div>
    <div class="card">
      <h2>Leave your comment...</h2>
<!-- Form for adding comments -->
<form>
	<input type="text" name="name" placeholder="Name" required>
	<input type="text" name="comment" placeholder="Comment" required>
	<input type="submit" name="submitComment" value="Submit">
</form>
<?php 
	require_once("db_con.php");
	// grabbing form input in order to create a new comment
	$submitComment = filter_input(INPUT_GET, 'submitComment');
	$newName = filter_input(INPUT_GET, 'name');
	$newComment = filter_input(INPUT_GET, 'comment');
	
	// grabbing form values from "delete" form
	$delete = filter_input(INPUT_GET, 'deleteName');
	$delete = filter_input(INPUT_GET, 'deleteComment');
	
	// IMPORTANT: storing comment id from hidden input element!
		$nameID = filter_input(INPUT_GET, 'id');
		$commentID = filter_input(INPUT_GET, 'id');

	// if the submitComment-button was pressed 
	if($submitComment){
		// establish connection and insert into the database table
		$stmt = $link->prepare("INSERT INTO comments (name, comment) VALUES (?,?)");
		$stmt->bind_param("ss", $newName, $newComment);
		$stmt->execute();
		$stmt->close();
	}
	// if the deleteComment-button was pressed 
	if($delete){
		// establish connection and delete the corresponding row from the database table comments
		$stmt = $link->prepare("DELETE FROM comments WHERE id=$commentID");
		$stmt->execute();
		$stmt->close();	
	}
	
	// rendering from database
	$stmt = $link->prepare("SELECT id, name, comment FROM comments");
	$stmt->execute();
	$stmt->bind_result($id, $name, $comment);
	


?>
	
	
	
<!-- Dynamic rendering from databse in PHP shorthand notation -->
	<?php while($stmt->fetch()) : ?> 
		
		<div class="results">		
		<?= "$name //  ","$comment";?> 
		
		  </div>
		
		
		<form>
   		<!-- Creating a hidden input element for each comment storing the row id from database table-->
    		<input type="hidden" name="id" value="<?= $id ?>">
			<input type="submit" name="deleteComment" value="Delete">
		</form>
		

		
<?php endwhile ?>

<?php
// finally closing the rendering statement and connection object ;-)
$stmt->close();
$link->close();
	
?>
    
    </div>
  </div>
  <div class="rightcolumn">
	  <div class="card">
      <h3>Website</h3>
	<div id="logo1"><a href="index.php" target="_blank"><img src="logo.png"  style="height:100px  "alt="logo"></a></div>
    </div>
    <div class="card">
      <h3>About Me</h3>
	<div class="imgprof"><img src="copenhagen (2).jpg" style="height:100px" alt="POST"></div>
      <p>Geographer and Communicator that wants to share a diary from my last adventures around the world!</p>
    </div>
	<div class="card">
      <h3>Follow us</h3>
		<div id="some1"><a href="https://www.facebook.com/Off-Borders-1886784074695183/" target="_blank"><img src="facebook.png"  style="height:50px" alt="logo"></a></div>
		
		<div id="some2"><a href="https://www.instagram.com/off_borders/" target="_blank"><img src="instagram.png"  style="height:50px" alt="logo"></a></div>
     
    </div>
    
	  <div class="card">
      <h3>Off Borders in Social Media</h3>
      <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink=https://www.instagram.com/p/Bc02In3nzUe/ data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.14814814814815% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/Bc02In3nzUe/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Lagoa do Fogo☀ #azores #azoresislands #saomiguel #travelazores #visitazores #nature #igersazores #igersportugal #landscape #discoverazores #picoftheday #trekking #green #azoresairlines #explore #europevacation #nikon #ilha #island #instadaily #instatravel #instagood</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">Uma publicação partilhada por <a href="&lt;Macro &#39;profile_link&#39;&gt;" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Off Borders</a> (@off_borders) a <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-12-18T01:48:49+00:00">Dez 17, 2017 às 5:48 PST</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
    </div>
  </div>
</div>

<div class="footer">
 This project is for educational purposes only.<br>Copyright &copy; 2017 Off Borders
</div>