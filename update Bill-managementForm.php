<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Bill Management</title>
    <style>
        .head3{
              
            margin-left: 150px;
            margin-top: 50px;
           
              
       
        }
        .head2{
            margin-left: 150px;
        }
        .main{
            border: solid rgb(197, 193, 193);
            margin-left: 100px;
            margin-top: 100px;
            margin-bottom: 100px;
            padding: 70px;
            background: rgb(245, 242, 235);
            
        }
        .btn{
            margin-left: 210px;
           
          
           
        }
        .btn :hover{
            color: burlywood;
            background: chartreuse;
            font-size: 15px;
            border-radius: 10px;
        }
        .main{
            background:green;
        }
      
        
          
     
    
    
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="head">
            <font color="blue"> Hostel management system </font>
        </div>
        <div class="head1">
            <font color="blue"> <h1>Billing Add</h1> </font>
        </div>
 <div class="main">
     <form action="update-bill.php" method="POST">


            
            <div class="head2">
            
            <b>Id</b>
            <br>
                <input type="text" name="Id" style="width: 500px;">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
             &nbsp; &nbsp;
            <b>Student Name</b>
            <br>
                <input type="text" name="Student" style="width: 500px;">
 
            </div>
           
            
            <div class="head3">
                
               <b>Bill type</b> 
               
              
                <div class="head4">
                 
                    <input type="text" name="Bill"style="width: 500px;">
                    
                </div>
                <b>Amount</b> 
                <div class="head5">
             
                    <input type="number" name="Amount" style="width: 500px;">
                </div>
                <div class="btn">
                    <br>
                    <input type="submit" value="Update" style="font-size:large;">
                </div>
           </div>
    </form>
</div> 
</body>
</html>