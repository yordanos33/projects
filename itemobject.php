<?php 
	include 'Dbitem.php';


    $iname=$_POST['it'];
    $amount=$_POST['am'];
    $price=$_POST['pr'];
    $pdate=$_POST['pd'];
    $edate=$_POST['ed'];

	$item1 = new Dbitem($iname,$amount,$price,$pdate,$edate);
	$item1->itemtable();
    $item1->insertitem();
   // $item1->retrieval();
?>