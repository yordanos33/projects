<!-- <?php
    session_start();
    

		   ?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image:url('su.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:100%;
        }
        .m{
             display:flex;
            align-items:center;
            justify-content:center;
             margin-top:100px;
             background-color:#cce6ff; 
            height:500px;
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
  <title>Items</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>
<div class="m"> 
    <form method = "post" action="itemobject.php">
            
    <div>
    <!-- <p style="font-weight:bold;font-size:40px;color:green">welcome  <?=$_SESSION['admin']?></p> -->
        
        <p style="font-weight:bold;font-size:40px;color:green">Add items</p>
        <lable>Item name</lable><input style="margin-left:40px;"  type="text" name="it" required placeholder="item name"/> <br/><br/>
        <lable>Amount</lable><input style="margin-left:55px;" type="text" name="am" required placeholder="amount"/><br/><br/>
        <lable>price</lable><input style="margin-left:75px;" type="text" name="pr" required placeholder="price"/> <br/><br/>
        <lable style="margin-left:-35px">Production date</lable><input style="margin-left:10px;" type="date" name="pd" required placeholder="production date"/><br/><br/>
        <lable style="margin-left:-35px">Expire date</lable><input style="margin-left:40px;"  type="date" name="ed" required placeholder="expire date"/> <br/><br/>
    </div>
        <button type="submit"  name="Add" class="btn btn-success">Add to store</button><br/>
          <!-- <p>already have an account?<a href="login.php">login</a></p> -->
        </form>
     </div>
                 
               
    <div>
</body>
</html>