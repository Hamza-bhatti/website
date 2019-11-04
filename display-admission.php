<!DOCTYPE html>
<html lang="en">
<head>
   <title>Deposit</title>
   <style>
   .grid{
    
    
  
     
      background:green;
       
 

   }
   h5{
    background: red;
    margin:auto;
    width:1015px;
    height:50px;
    display:flex;
    flex-flow: column nowrap;
    justify-content: space-around;
   }
 
   
  
   </style>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
        
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $ret = mysqli_query($conn,"SELECT * FROM data");
    echo '<td>
    <font color="blue"><h5> Hostel management system</h5> </font>
   <font color="blue"> <h1>Meal Money Deposit</h1> </font>
    
    </td>';  
    echo "<table border='1'>";
    echo "<table class='grid'>";
        echo "<tr>";
            echo "<th> Delete </th>";
            echo "<th> Update </th>";
            echo "<th> ID </th>";
            echo "<th> Fullname </th>";
            echo "<th> Student ID </th>";
            echo "<th> Cell No </th>";
            echo "<th> Email </th>";
            echo "<th> Password </th>";
            echo "<th> Conform Password </th>";
            echo "<th> Name of Institute </th>";
            echo "<th> Program </th>";
            echo "<th> Gender </th>";
            echo "<th> Date of Birth </th>";
            echo "<th> Blood Group </th>";
            echo "<th> Nationality </th>";
            echo "<th> Passport No </th>";
            echo "<th> Father Name </th>";
            echo "<th> Father Cell No </th>";
            echo "<th> Mother Name </th>";
            echo "<th> Mother Cell No </th>";
            echo "<th> Local Guardian </th>";
            echo "<th> Local Guardian Cell No </th>";
            echo "<th> Present Address </th>";
            echo "<th> Permanent Address </th>";
            
         


            while($row=mysqli_fetch_array($ret))
            {
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";
                echo '<td><form action="delete-admission.php" method="POST">
                <input type="hidden" name="id" value='. $row['id'] .'>
                <input type="submit"name="submit" class="btn" value="Delete" 
                style="color:red; background:black;">
                
                </form></td>'; 
                echo '<td><form action="update-Admissionform.php" method="POST">
                <input type="submit"name="submit" class="btn" value="Update" 
                style="color:red; background:black;">
                </form></td>'; 

                echo "<td>" .$row ['id']. "</td>";
                     echo "<td>" .$row ['Fullname']. "</td>";
                    echo "<td>" .$row ['StudentID']. "</td>";
                    echo "<td>" .$row ['CellNo']. "</td>";
                    echo "<td>" .$row ['Email']. "</td>";
                    echo "<td>" .$row ['Password']. "</td>";
                    echo "<td>" .$row ['ConformPassword']. "</td>";
                    echo "<td>" .$row ['NameofInstitute']. "</td>";
                    echo "<td>" .$row ['Program']. "</td>";
                    echo "<td>" .$row ['Gender']. "</td>";
                    echo "<td>" .$row ['DateofBirth']. "</td>";
                    echo "<td>" .$row ['BloodGroup']. "</td>";
                    echo "<td>" .$row ['Nationality']. "</td>";
                    echo "<td>" .$row ['PassportNo']. "</td>";
                    echo "<td>" .$row ['FatherName']. "</td>";
                    echo "<td>" .$row ['FatherCellNo']. "</td>";
                    echo "<td>" .$row ['MotherName']. "</td>";
                    echo "<td>" .$row ['MotherCellNo']. "</td>";
                    echo "<td>" .$row ['LocalGuardian']. "</td>";
                    echo "<td>" .$row ['LocalGuardianCellNo']. "</td>"; 
                    echo "<td>" .$row ['PresentAddress']. "</td>"; 
                    echo "<td>" .$row ['PermanentAddress']. "</td>"; 
 
                   ;
                echo "</tr>";
                echo "</tr>";
                echo "</tr>";

            }
        echo "</tr>";
    echo "</table>";
    echo "</table>";
    $conn->close();
?>