<?php 
session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['user_id']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 

