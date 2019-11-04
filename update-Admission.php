<?php
$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "admission form";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($_POST) 
{
    $id = $_POST['id'];
    $Fullname = $_POST['Fullname'];
    $StudentID = $_POST['StudentID'];
    $CellNo = $_POST['CellNo'];
    $Email  = $_POST['Email'];
    $Password  = $_POST['Password'];
    $ConformPass  = $_POST['ConformPass'];
    $Institute  = $_POST['Institute'];
    $Program  = $_POST['Program'];
    $Gender  = $_POST['Gender'];
    $Date  = $_POST['Date'];
    $Blood  = $_POST['Blood'];
    $Nationality   = $_POST['Nationality'];
    $Passport  = $_POST['Passport'];
    $Father  = $_POST['Father'];
    $FatherCell  = $_POST['FatherCell'];
    $Mother  = $_POST['Mother'];
    $MotherCell  = $_POST['MotherCell'];
    $Guardian  = $_POST['Guardian'];
    $GuardianCell  = $_POST['GuardianCell'];
    $PresentAdd  = $_POST['PresentAdd'];
    $PermanentAdd  = $_POST['PermanentAdd'];

    




    $q = " UPDATE data SET id='$id',Fullname='$Fullname',StudentID='$StudentID', CellNo='$CellNo',Email='$Email',
                      Password='$Password',ConformPassword='$ConformPass', NameofInstitute='$Institute',
                      Program='$Program',Gender='$Gender',DateofBirth='$Date',BloodGroup='$Blood',
                      Nationality='$Nationality',PassportNo='$Passport',FatherName='$Father', 
                      FatherCellNo='$FatherCell',MotherName='$Mother',MotherCellNo='$MotherCell',
                      LocalGuardian='$Guardian',LocalGuardianCellNo='$GuardianCell',
                      PresentAddress='$PresentAdd',PermanentAddress='$PermanentAdd'
    where id= $id" ;

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
