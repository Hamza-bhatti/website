<?php
$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admission form";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($_POST) 
{
    $Id = $_POST['Id'];
    $Student = $_POST['Student'];
    $Bill = $_POST['Bill'];
    $Amount = $_POST['Amount'];


    $q = " UPDATE bill SET Id='$Id',StudentName='$Student', Billtype='$Bill' ,Amount='$Amount'
    where Id= $Id" ;

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
