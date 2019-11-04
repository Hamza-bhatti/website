
<?php


$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "web technologies";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($_POST) 
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $CNIC = $_POST['CNIC'];;

    $q = " UPDATE emploeeinfo SET firstname='$firstname', lastname='$lastname'  , email='$email' , CNIC='$CNIC'
    where email= $email  ";

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
