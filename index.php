<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NSSCE OFFICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
<!--navbar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <img src="img/logo.png" style="height:10%; width:10%;">
    </div>
</nav> 
<!--navbar end-->
<!--<a class="navbar-brand" href="#" style="padding:0px;">
<img src="img/logo.png" style="height:10%; width:10%;">
</a>-->
<div class="page-header">
    <br><br><br>
<div class="container">
<form method="post" action="index.php">
<!-- display validation errors here -->
<?php include("errors.php"); ?>
<div class="form-group col-6">
    <label>Student Name:</label>
    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
</div>
<div class="form-group col-6">
    <label>Department:</label>
    <input type="text" class="form-control" name="department" value="<?php echo $department; ?>">
</div>
<!--<div class="form-group col-6">
    <label>Semester:</label>
    <input type="text" class="form-control"  name="semester" value="<?php echo $semester; ?>">
</div>-->
<div class="form-group col-6">
  <label for="sel1">Semester:</label>
  <select class="form-control" name="semester" value="<?php echo $semester; ?>" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
  </select>
</div> 
<!--end-->
<div class="form-group col-6">
    <label>E-mail</label>
    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
</div>
<!--<div class="form-group col-6">
    <label>Subject:</label>
    <input type="text" class="form-control" name="subject" value="<?php echo $subject; ?>">
</div>-->
<div class="form-group col-6">
<label>Subject:</label><br>
&nbsp;&nbsp;<label class="radio-inline"><input type="radio" name="subject" value="Cerificate related">Cerificate Related</label>
<label class="radio-inline"><input type="radio" name="subject" value="Fees Related">Fees Related</label>
<label class="radio-inline"><input type="radio" name="subject" value="Others">Others</label> 
</div>
<!--end-->
<div class="form-group col-6">
    <label>Date sought:</label>
    <input type="date" class="form-control"  name="date" value="<?php echo $date; ?>">
</div>

<br>
<div class="form-group col-6">
    <button type="submit" name="appoint" class="btn btn-success btn-block">Book Appointment</button>
</div>
</div>

</form>
</div>

</body>
</html>