<?php include_once("header2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
     <meta charset ="UTF-8">       
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foreman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="flogin-check.php" method="post">
     	<h2>Foreman Login Page</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="foremanreg.php" class="ca">Create an account</a>
     </form>
</body>
</html>