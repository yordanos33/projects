<?php
      include'DbConnection.php';
      $co = new DbConnection();
                $conn=$co->Connection();
  
  
       if(isset($_GET['id_delete']))
       {
       $id=$_GET['id_delete'];
       $sql="delete from items WHERE item_id=$id";
       $retval=$co->execquery($sql, $conn);
        if($retval)
        { 
// echo'the data is deleted<br/>';
        header('location:Itemtable.php'); 
        }
       else{
//  echo "data is not deleted";
       }
       }
     
     ?>
       

