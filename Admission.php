<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .head2{
        display: flex;
      
        justify-content: space-evenly;
        margin-top: 10px;
        color: burlywood;
        background: chartreuse;

    }
    .head3{
        display: flex;
      
        justify-content: space-evenly;
        margin-top: 10px;
        background: chartreuse;
    }
    .head4{
        display: flex;

        justify-content: space-evenly;
        margin-right: 60px;
        margin-top: 10px;
        background: chartreuse;

    }
    .head5{
        display: flex;
        
        justify-content: space-evenly;
        margin-left: 2px;
        margin-top: 10px;
        background: chartreuse;
    }
    .head6{
        display: flex;
       
        justify-content: space-evenly;
        margin-top: 10px;
        background: chartreuse;

    }
    .head7{
        display: flex;
        margin-top: 10px;   
        justify-content: space-evenly;
        background: chartreuse;

    }
    .head8{
        display: flex;
        margin-top: 10px;        
        justify-content: space-evenly;
        background: chartreuse;

    }
    .head9{
        display: flex;
        justify-content: space-evenly;
        background: chartreuse;
        
        margin-top: 10px;
    }
    .blood{
        margin-left: 19px;
    }
    .head9 :hover{
        color: tomato;
        background: darkgrey;
        font-size: 15px;
        cursor: pointer;
    }
    .head{
        background: red;
        width:1015px;
        height:50px;

    }
 
 
    
    
    </style>
   
    <title>Document</title>
</head>
<body bgcolor="Green">
    <div class="head"> <font color="Blue">Hostel management system</font> </div>
    <div class="head1">
      <h1><font color="Blue">New Admission</font></h1>  
    </div>
    <br>
<form method="POST" action="save-Admission.php" >
<div class=main>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>Fullname</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> Student ID </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Cell No</b>
    <div class="head2">
            
            <div >
           
            <input type="text" name="Fullname" placeholder="Fullname" style="background: rgb(224, 222, 222);">
            </div>
            
            
            <div>
            <input type="number" name="StudentID"placeholder="Student ID"style="background: rgb(224, 222, 222);">
            </div>

            
            <div>
            <input type="number" name="CellNo"placeholder="Cell No"style="background: rgb(224, 222, 222);">
            </div> 
    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>Email</b>

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Password</b> 

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;<b>Conform Password</b>
    <div class="head3">
            
            <div>
            <input type="email" name="Email"placeholder="Email"style="background: rgb(224, 222, 222);">
            </div>

            
            <div>
            <input type="password" name="Password"placeholder="Password"style="background: rgb(224, 222, 222);">
            </div>

            
            <div>
            <input type="password" name="ConformPass"placeholder="Conform Password"style="background: rgb(224, 222, 222);">
            </div>
    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> Name of Institute</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<b>Program </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp;<b>Gender</b>
    <div class="head4">
            
            <div>
            <input type="text" name="Institute"placeholder="Institute"style="background: rgb(224, 222, 222);">
            </div>

            
            <div>
            <input type="text" name="Program"placeholder="Program"style="background: rgb(224, 222, 222);">
            </div>
            
            <div class="Gender">
            <select name="Gender"style="background: rgb(224, 222, 222);">
            <option value="U-Undefined">U-Undefined</option>     
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
            </select>
            
            </div>
    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Date of Birth</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Blood Group </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Nationality</b>
    <div class="head5">
            
            <div>
            <input type="date" name="Date" placeholder="Date of Birth"style="background: rgb(224, 222, 222);">
           </div>
           
              
            <div class="blood">
            <input type="text" name="Blood" placeholder="Blood Group"style="background: rgb(224, 222, 222);">
           </div>
       
            
             <div class="Nationality">
            <input type="text" name="Nationality" placeholder="Nationality"style="background: rgb(224, 222, 222);">
            </div> 
    </div>

    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> Passport No</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Father Name </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Father Cell No</b>
    <div class="head6">
            
            <div>
            <input type="number" name="Passport"placeholder="Passport No"style="background: rgb(224, 222, 222);">
           </div>
           
             
            <div>
            <input type="text" name="Father"placeholder="Father Name "style="background: rgb(224, 222, 222);">
           </div>
       
            
             <div>
            <input type="number" name="FatherCell"placeholder="Father Cell No"style="background: rgb(224, 222, 222);">
            </div> 
     </div>

    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Mother Name</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Mother Cell No </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp;<b>Local Guardian</b>
    <div class="head7">
            
            <div>
            <input type="text" name="Mother"placeholder="Mother Name"style="background: rgb(224, 222, 222);">
           </div>
           
             
            <div>
            <input type="number" name="MotherCell"placeholder="Mother Cell No"style="background: rgb(224, 222, 222);">
           </div>
       
            
             <div>
            <input type="text" name="Guardian"placeholder="Local Guardian"style="background: rgb(224, 222, 222);">
            </div> 
    </div>

    </div>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp;<b>Local Guardian Cell No</b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp;<b>Present Address </b>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>Permanent Address</b>
    <div class="head8">
            
            <div>
            <input type="number" name="GuardianCell"placeholder="Local Guardian Cell No"style="background: rgb(224, 222, 222);">
           </div>
           
             
            <div>
            <input type="text" name="PresentAdd"placeholder="Present Address"style="background: rgb(224, 222, 222);">
           </div>
       
             
             <div>
            <input type="text" name="PermanentAdd"placeholder="Permanent Address"style="background: rgb(224, 222, 222);">
            </div> 
     </div>

    </div>
    <br>
    <div class="head9">
            <input type="submit" value="Save" >

    </div>
 
</form> 
</body>
</html>