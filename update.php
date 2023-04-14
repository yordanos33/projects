<?php
           include'DbConnection.php';
           $co = new DbConnection();
                $conn=$co->Connection();
       

		   if(isset($_POST['update']))
		   {  
            $id=$_GET['id_update'];
            $name=$_POST['it'];
            $amount=$_POST['am'];
            $price=$_POST['pr'];
            $pdate=$_POST['pd'];
            $edate=$_POST['ed'];
		   $sql ="update items set item_id='$id',item_name='$name',amount='$amount',price='$price',production_date='$pdate',expire_date='$edate' where item_id=$id ";
           $retval=$co->execquery($sql, $conn);
           if($retval) 
        //  echo "succesfully updated";
         header('location:Itemtable.php');
    else   
       echo "Could not update data"; 
			   
		   }

		   ?>


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
             margin-top:120px;
             background-color: #99ddff; 
            height:450px;
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
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
<div class="m"> 
    <form method = "post" action="">
            
    <div>
        <p style="font-weight:bold;font-size:40px;color:black">Update items</p>
        <lable>Item name</lable><input style="margin-left:40px;"  type="text" name="it" required placeholder="item name"/> <br/><br/>
        <lable>Amount</lable><input style="margin-left:55px;" type="text" name="am" required placeholder="amount"/><br/><br/>
        <lable>price</lable><input style="margin-left:75px;" type="text" name="pr" required placeholder="price"/> <br/><br/>
        <lable style="margin-left:-35px">Production date</lable><input style="margin-left:10px;" type="date" name="pd" required placeholder="production date"/><br/><br/>
        <lable style="margin-left:-35px">Expire date</lable><input style="margin-left:40px;"  type="date" name="ed" required placeholder="expire date"/> <br/><br/>
    </div>
        <button type="submit"  name="update" class="btn btn-primary">Update</button><br/>
          <!-- <p>already have an account?<a href="login.php">login</a></p> -->
        </form>
     </div>
                 
               
    <div>

</body>
</html>