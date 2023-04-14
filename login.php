<?php
        include'DbConnection.php';
        $co = new DbConnection();
             $conn=$co->Connection();
   // $sql ='SELECT item_id,item_name,amount,price,production_date,expire_date FROM items';
    //$retval=$co->execquery($sql, $conn);
		   if(isset($_POST['login']))
           {  
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM admin ";
        $retval=$co->execquery($sql, $conn);
//$result=mysqli_query($conn,$sql);
           if($retval)
           {
       while($row=mysqli_fetch_assoc($retval))
      {
         $fn=$row['first_name'];
        $ln=$row['last_name'];
        $em=$row['email'];
        $pa=$row['password'];
        if($fname==$fn && $lname==$ln && $email==$em && $pass==$pa)
        {
            session_start();
            $_SESSION['admin']=$fn; 
     header('location:item.php');
                  
        }
        
   
   
    }
    
    // echo header('location:loginfail.php'); 
    

            //    header('location:item.php');
           }
           
        }   
	



		   ?>


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
             margin-top:150px;
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
  <title>Bootstrap Example</title>
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
    <form method = "POST" action="">
    <p style="font-weight:bold;font-size:40px;color:blue"> Log in</p>
    
    
        <lable>Firstname:</lable><input type="text" name="fname" required placeholder="first name"/> <br/><br/>
        <lable>Lastname:</lable><input type="text" name="lname" required placeholder="last name"/><br/><br/>
        <lable>Email:</lable><input style="margin-left:57px;" type="email" name="email" required placeholder="email"/><br/><br/>
        
        <lable>Password</lable>:<input type="password" name="pass" required placeholder="password"/> <br/><br/>
         <!-- <button type="submit" name="submit" class="btn btn-primary"><a href="item.php" style="text-decoration:none;color:white">log in</a></button><br/> -->
         <button type="submit" name="login" class="btn btn-primary">Log in</button><br/>
        
         <!-- <p>already have an account?<a href="#">login</a></p> -->
        </form>
    </div>
                 
               

</body>
</html>