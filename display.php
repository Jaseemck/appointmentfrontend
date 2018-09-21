<?php 

if(isset($_POST['search'])){
        $data = mysqli_real_escape_string($db, $_POST['data']);


    //ensure that form fields are filled properly
    if(empty($data)){
        array_push($errors, "Enter a date"); // add error to errors array
    }
    
    if(count($errors)==0){
        $sql1 = "SELECT * FROM appointments WHERE date='$data'";
        $result=mysqli_query($db, $sql1);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>|Student|</th><th>|Semester|</th><th>|Department|</th><th>|Subject|</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo   "<tr><td>".$row["username"]."</td><td>".$row["semester"]."</td><td>".$row["department"]."</td><td>".$row["subject"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    }        
    }

?>