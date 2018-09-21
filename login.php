<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<div class="logbg">
<body>
<div class="header">
    <h2>Admin Login</h2>
</div>
<form method="post" action="login.php">
    <!-- display validation errors here -->
<?php include("errors.php"); ?>
<div class="input-group">
    <label>Admin Username:</label>
    <input type="text" name="admin">
</div>
<div class="input-group">
    <label>Password:</label>
    <input type="password" name="password">
</div>
<div class="input-group btns">
    <button type="submit" name="login" class="btn">Login</button>
    <br><br>
<p> &nbsp Not an admin? <a href="index.php"><strong> Appointment</strong></a></p>
</div>
</form>
</body>
</div>
</html>