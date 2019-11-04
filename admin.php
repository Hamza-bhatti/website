<?php
    

   
    $name=$_POST['user'];
    $password=$_POST['pass'];
    
    
    if (($name=="admin" and $password=="admin")){
        header('Location:Admission.php');
    }
    else{
        echo "sorry";
    }
?>
