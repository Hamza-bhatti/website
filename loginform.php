<html>
<head>
    <title> Transparent Login Form Design </title>
    <style>
     body{
       
        background: url(img.jpg);
        alt: no-repeat;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
    }
    .login-box{
        width: 320px;
        height: 420px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;

        margin-left: 650px;
        margin-top:200px;
        transform: translate(-20%,-20%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .login-box1{
        width: 320px;
        height: 420px;
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        top: 40%;
        left: 25%;
        position: absolute;
        transform: translate(-39%,-39%);
        box-sizing: border-box;
        padding: 70px 30px;
       
    }
    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
       margin-left: 80px;
      
    }
    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }
    .login-box p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }
    .login-box input{
        width: 100%;
        margin-bottom: 20px;
    }
    .login-box input[type="text"], input[type="password"]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .login-box input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }
    .login-box input[type="submit"]:hover
    {
        cursor: pointer;
        background: #39dcb9;
        color: #000;
    }
    
    .login-box a{
        text-decoration: none;
        font-size: 14px;
        color: #fff;
    }
    .login-box a:hover
    {
        color: #39dc79;
    }








    .login-box1 p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }
    .login-box1 input{
        width: 100%;
        margin-bottom: 20px;
    }
    .login-box1 input[type="text"], input[type="password"]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .login-box1 input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }
    .login-box1 input[type="submit"]:hover
    {
        cursor: pointer;
        background: #39dcb9;
        color: #000;
    }
    
    .login-box1 a{
        text-decoration: none;
        font-size: 14px;
        color: #fff;
    }
    .login-box1 a:hover
    {
        color: #39dc79;
    }
    
    
        </style>   
</head>
    <body>
    <div class="login-box">
        
    <img src="avatar.png" class="avatar">
        <h1>Login Here As User</h1>
            <form action="userlogin.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
       
    </div>
    <div class="login-box1">
        
            <img src="avatar.png" class="avatar">
                <h1>Login Here As Admin</h1>
                    <form action="admin.php" method="POST">
                    <p>Username</p>
                    <input type="text" name="user" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Enter Password">
                    <input type="submit" name="submit" value="Login">
                    <a href="#">Forget Password</a>    
                   
                    </form>
               
            </div>
    
    
    
    </body>
</html>