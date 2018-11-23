<?php
    session_start();
    $regno = "";
    $student="";
    $logpass="";
    $errors = array();

    $db = mysqli_connect('localhost','root','','appointment');
    //log user in from login page
    if(isset($_POST['studlogin'])){
        $regno = mysqli_real_escape_string($db, $_POST['regno']);
        $logpass = mysqli_real_escape_string($db, $_POST['logpass']);




        $logpass=md5($logpass);
        $query = "SELECT * FROM student WHERE regno='$regno' AND password='$logpass'";
        $result=mysqli_query($db, $query);
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)==1){
            //log user in
            $_SESSION['regno']=$regno;
            $_SESSION['studname']=$row["studname"];
            $_SESSION['success']="You are now logged in";
            header('location: appoint.php'); //redirect to appointment page            
        }else{
            array_push($errors, "Wrong username/password combination");
    }        
    }



    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['regno']);
        header('location: index.php');
    }