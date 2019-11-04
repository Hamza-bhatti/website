<?php
    

    $host ="localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "admission form";
    
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    
    
    if(isset($_POST['username'])){
    
        $name=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from loginform where user='".$name."'AND Pass='".$password."' limit 1";
        
         $result=mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            echo "<script> window.location.assign('Admission.php');</script>";
           
            exit();
        }
        else{
            echo " You Have Entered Incorrect Password";
            echo "<script> window.location.assign('wrongpass.php');</script>";
            exit();
        }
    }  
