
<?php
    
    $Title = $_POST['Fullname'];
    $First = $_POST['StudentID'];
    $MI = $_POST['CellNo'];
    $Last  = $_POST['Email'];
    $Address1  = $_POST['Password'];
    $Address2  = $_POST['ConformPass'];
    $Address3  = $_POST['Institute'];
    $City  = $_POST['Program'];
    $State  = $_POST['Gender'];
    $PostCode  = $_POST['Date'];
    $Province  = $_POST['Blood'];
    $VendorID   = $_POST['Nationality'];
    $Gender  = $_POST['Passport'];
    $Phone  = $_POST['Father'];
    $DialCode  = $_POST['FatherCell'];
    $AltPhone  = $_POST['Mother'];
    $Show  = $_POST['MotherCell'];
    $Email  = $_POST['Guardian'];
    $Comments  = $_POST['GuardianCell'];
    $Comment1  = $_POST['PresentAdd'];
    $Comment2  = $_POST['PermanentAdd'];

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if (mysqli_connect_error()){
  		echo "Failed to connect to MySQL:".mysqli_connect_error(); 
    }
    else{
        $sql =  "INSERT INTO `data` (`Fullname`, `StudentID`, `CellNo`, `Email`,
         `Password`, `ConformPassword`, `NameofInstitute`, `Program`, `Gender`, 
         `DateofBirth`, `BloodGroup`, `Nationality`, `PassportNo`, `FatherName`, 
         `FatherCellNo`, `MotherName`, `MotherCellNo`, `LocalGuardian`, `LocalGuardianCellNo`,
          `PresentAddress`, `PermanentAddress`)
      
        VALUES ('$Title','$First','$MI','$Last','$Address1','$Address2','$Address3','$City','$State',
                                    '$PostCode','$Province','$VendorID','$Gender','$Phone', '$DialCode','$AltPhone',
                                    '$Show','$Email','$Comments','$Comment1','$Comment2')";
        if ($conn->query($sql))
        {
            echo "New record is inserted successfully";
            echo "<script> window.location.assign('display-Admission.php');</script>";

             
        }
        else
        {
            echo "Error Inserting record Witch";
        }
        $conn->close();
    }
?>
 