
<?php
    
    $Title = $_POST['Student'];
    $First = $_POST['Bill'];
    $MI = $_POST['Amount'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql= "INSERT INTO `bill` (`StudentName`, `Billtype`, `Amount`) 
        VALUES ('$Title','$First','$MI')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
          

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 