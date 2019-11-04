<!DOCTYPE html>
<html lang="en">
<head>
   <title>bill</title>
   <style>
   .grid{
       margin-top:100px;
       margin-left:300px;
      border: solid red;
      gap:10px;
       
 

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

    $ret = mysqli_query($conn,"SELECT * FROM bill");
    echo '<td>
    <font color="blue"> Hostel management system </font>
   <font color="blue"> <h1>Billing view</h1> </font>
    
    </td>'; 
   
    echo "<table border='1'>";
    echo "<table class='grid'>";
    echo "<table class='head'>";
   
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th> Student Name </th>";
            echo "<th> Bill Type </th>";
            echo "<th> Amount  </th>";
            echo "<th> Delete </th>";
            echo "<th> Update </th>";
           
     


            while($row=mysqli_fetch_array($ret))
            {
              
                        
                echo "<tr>";
                echo "<tr>";
                echo "<tr>";
              

                    echo "<td>".$row ['Id']. "</td>";
                    echo "<td>".$row ['StudentName']. "</td>";
                    echo "<td>" .$row ['Billtype']. "</td>";
                    echo "<td>" .$row ['Amount']. "</td>";
                    echo '<td><form action="delete-Bill.php" method="POST">
                    <input type="hidden" name="Id" value='. $row['Id'] .'>
                    <input type="submit"name="submit" class="btn" value="Delete" 
                    style="color:red; background:black;">
                    
                    </form></td>'; 
                    echo '<td><form action="update Bill-managementForm.php" method="POST">
                    <input type="submit"name="submit" class="btn" value="update" 
                    style="color:red; background:black;">
                    </form></td>'; 

 
 
                   
                echo "</tr>";
                echo "</tr>";
                echo "</tr>";
              
                
            }
        echo "</tr>";
    echo "</table>"
    echo "</table>";
    echo "</table>";
    $conn->close();
?>