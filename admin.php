<?php include('server.php'); 
//if user is not logged in, they cannot access this page
if (empty($_SESSION['admin'])){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

</head>
<body>
<div class="adbg">
<div class="header">
    <div class="logo" >
        <img src="img/logo.png">
    </div>
    <h2>Appointment</h2>
    <div class="adminlogout">
    <?php if (isset($_SESSION["regno"])): ?>
        <p><a href="admin.php?logout='1'">Logout</a></p>
    <?php endif ?>
    </div>
</div>

<form method="post" action="admin.php">
<!-- display validation errors here -->
<?php include("errors.php"); ?>
<div class="input-group">
    <label>Date :</label>
    <input type="date" name="data" value="<?php echo $data; ?>">
</div>

<div class="input-group btns">
    <button type="submit" name="search" class="btn">Search</button>
</div>

</form>
<div class="display">
<?php include('display.php'); ?>
</div>
<div class="footer">
    <p>NSS COLLEGE OF ENGINEERING PALAKKAD</p>
</div>
</div>
</body>
</html>