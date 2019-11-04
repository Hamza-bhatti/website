<?php
$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admission form";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($_POST) 
{
    $student = $_POST['student'];
    $Amount = $_POST['Amount'];
    $Date = $_POST['Date'];
    $id = $_POST['id'];


    $q = " UPDATE deposit SET studentName='$student', Amount='$Amount', DepositDate='$Date',id='$id'
    where Id= MAX(Id)" ;

    if ( $conn->query($q) )
    {
        echo "Record will update";
    }
    else
    {
        echo "Updating Error !!! " .$conn->error; 
    }


}

?>
