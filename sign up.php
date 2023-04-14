<!-- <?php
    session_start();
    // $_SESSION['admin']=$_POST['fname'];

		   ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{

            background-image:url('s.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:100%;
        }
        .m{
             display:flex;
            align-items:center;
            justify-content:center;
             margin-top:110px;
             background-color:white; 
            height:400px;
            width:400px;
            text-align:center;
            border-radius:30px;
            margin-left:500px
            }
            .m form lable{
               font-weight:bold;
                font-size:15px;
            }
            .m form input {
             margin-left:30px;
                font-size:15px;
                background:#eee;
                border-color:white;
                border-radius:10px;
                padding: 10px;
            }
            .m form button{
                font-size:16px;
            }
            .m form p{
                font-size:16px;   
            }
            
            
        </style>
  <title>Sign Up</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m"> 
    
    <form method = "post" action="insertadmin.php">
            <p style="font-weight:bold;font-size:40px;color:blue"> Administrator</p>
    
        <lable>Firstname:</lable><input type="text" name="fname" required placeholder="first name"/> <br/><br/>
        <lable>Lastname:</lable><input type="text" name="lname" required placeholder="last name"/><br/><br/>
        <lable>Email:</lable><input style="margin-left:57px;" type="email" name="email" required placeholder="email"/><br/><br/>
        
        <lable>Password</lable>:<input type="password" name="pass" required placeholder="password"/> <br/><br/>
         <button type="submit" name="submit" class="btn btn-primary">sign up</button><br/>
          <p>already have an account?<a href="login.php">login</a></p>
        </form>
    </div>
                 
               

</body>
</html>