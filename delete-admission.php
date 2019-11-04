<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_REQUEST['submit'])){
//$sql = "DELETE FROM detail WHERE 0= {$_REQUEST['Title']}";
$sql = "DELETE FROM data WHERE id='". $_REQUEST["id"] ."'";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo "<script> window.location.assign('display-admission.php');</script>";

} else {
    echo "Error deleting record: " . $conn->error;
}
}

$conn->close();
?>