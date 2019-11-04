<?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql= "INSERT INTO `userlogin` (`User`, `Pass`)
        VALUES ('$username','$password')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            echo "<script> window.location.assign('Admission.php');</script>";
          

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 