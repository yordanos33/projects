<!Doctype html>
<html>
<head>
  <style>
    body{
            background-image:url('1.png');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:100%;
        }
        .table tr{
          font-size:20px;
font-weight:bold;
        }
        .table tr{
          border-weight:3px;
        }
    </style>
<title>fetching data from data base table</title>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    
      <?php
          include'DbConnection.php';
          $co = new DbConnection();
	       	$conn=$co->Connection();
      $sql ='SELECT item_id,item_name,amount,price,production_date,expire_date FROM items';
      $retval=$co->execquery($sql, $conn);
       
      if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }

      echo '<p style="font-weight:bold;text-align:center;font-size:50px">Item Details</p>
      <div class ="container" style="margin-top:10px">
<table class="table table-bordered table-striped table-hover ">
        <tr>
        <th>Item id</th>
        <th>Item name</th>
        <th>Amount</th>
         <th>Price</th>
          <th>Production date</th>
          <th>Expire date</th>
          <th>Action</th>
        </tr>
		';
    while($row = mysqli_fetch_assoc($retval)) 
    {
		$id=$row['item_id'];
        $name=$row['item_name'];
		$amount=$row['amount'];
		$price=$row['price'];
        $pdate=$row['production_date'];
        $edate=$row['expire_date'];
     echo '<tr >
     <td> '.$id.'</td>
     <td>'.$name.'</td>
     <td> '.$amount.'</td>
     <td> '.$price.'</td>
     <td> '.$pdate.'</td>
      <td> '.$edate.'</td>
    <td>
		<button class="btn btn-info"><a style="color:white;text-decoration:none" href="update.php?id_update='.$id.'" class="text-white">update</a></button>
		<button class="btn btn-danger"><a style="color:white;text-decoration:none" href="remove.php?id_delete='.$id. '" class="text-white">delete</a></button>
		   </td>
          </tr> ';
	}
         '</table></div>'
  

   ?>
</body>
</html>