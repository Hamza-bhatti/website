<!DOCTYPE html>
<html lang="en">
<head>
   <title>Deposit</title>
   <style>
   .grid{
       margin-top:100px;
       margin-left:300px;
      border: solid red;
      gap:10px;
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

    $ret = mysqli_query($conn,"SELECT * FROM Deposit");
    echo '<td>
    <font color="blue"><h5> Hostel management system</h5> </font>
   <font color="blue"> <h1>Meal Money Deposit</h1> </font>
    
    </td>'; 

    echo "<table border='1'>";
    echo "<table class='grid'>";
    
   
        echo "<tr>";
            echo "<th> Id </th>";
            echo "<th> student Name </th>";
            echo "<th> Amount </th>";
            echo "<th> Deposit Date </th>";
            echo "<th> Delete </th>";
            echo "<th> Update </th>";
           
     


            while($row=mysqli_fetch_array($ret))
            {
              
                        
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";
              

                    echo "<td>".$row ['Id']. "</td>";
                    echo "<td>".$row ['studentName']. "</td>";
                    echo "<td>" .$row ['Amount']. "</td>";
                    echo "<td>" .$row ['DepositDate']. "</td>";
                    echo '<td><form action="delete-Deposit.php" method="POST">
                    <input type="hidden" name="Id" value='. $row['Id'] .'>
                    <input type="submit"name="submit" class="btn" value="Delete" 
                    style="color:red; background:black;">
                    
                    </form></td>'; 
                    echo '<td><form action="update-depositForm.php" method="POST">
                    <input type="submit"name="submit" class="btn" value="update" 
                    style="color:red; background:black;">
                    </form></td>'; 
 
                   
                echo "</tr>";
                echo "</tr>";
                echo "</tr>";
              
                
            }
        echo "</tr>";
    echo "</table>";
    echo "</table>";
 
    $conn->close();
?>