<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	require_once('db_con.php');
	$sql = 'SELECT name, email, signuptime FROM newsletter ORDER BY signuptime DESC';
	$stmt = $link->prepare($sql);
	$stmt->bind_result($n, $e, $s);
	$stmt->execute();
	
	while($stmt->fetch()){
		echo '<div>
		<div>'.$n.'</div>
		<div>'.$e.'</div>
		<div>'.$s.'</div>
	</div>';
	}
?>
	
</body>
</html>