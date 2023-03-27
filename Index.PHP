<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type = "text/css" href="Styles.css" />
        
    </head>
    <body>
       <form action="login.php" method="post">
       	<h2>LOGIN</h2>
       	<?php if (isset($_GET['error'])) { ?>
       		<p class="error"><?php echo $_GET['error']; ?></p>
       	<?php } ?>
       	<label>User ID</label>
       	<input type="text" name="user_id" placeholder="User ID"><br>
      
       	<button type="submit">Login</button>
       </form>
    </body>
</html>