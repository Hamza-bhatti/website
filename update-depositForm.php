<!DOCTYPE html>
<html lang="en">
<head>
   <title>Deposit</title>
   <style>
   .main{
    margin-top: 70px;
    margin-left: 380px;;
 

   }
   
   
   </style>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="head">
     <font color="blue"> Hostel management system </font>
    </div>
    <div class="head1">
     <font color="blue"> <h1>Deposit</h1> </font>
    </div>
  
  <div class="main">
        <h3>Meal Money Deposit</h3>
<form action="update-deposit.php" method="POST">
 
        student Name
    <div>
        <input type="text" name="student" >
   </div>
         Amount
    <div>
        <input type="number" name="Amount">
  </div>
        Deposit Date
    <div>
        <input type="datetime" name="Date">
  </div>
  <br>
   <div>
      <input type="Submit" name="submit" value="update">
</form>
</div>  
</body>
</html>