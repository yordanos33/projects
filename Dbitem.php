<?php
include ('DbConnection.php');
     class Dbitem{
		private $iname;
		private $amount;
		private $price;
        private $pdate;
		private $edate;
		  
		function __construct($iname,$amount,$price,$pdate,$edate)
        {
			$this->iname=$iname;
			$this->amount=$amount;
			$this->price=$price;
			$this->pdate=$pdate;
			$this->edate=$edate;

		}
		
		
	   public function itemtable()
       {
		$co = new DbConnection();
		$cc=$co->Connection();	
	    $sql="CREATE table IF NOT EXISTS items(item_id int AUTO_INCREMENT PRIMARY KEY,item_name VARCHAR(40),amount int,price int,production_date date,expire_date date)";
		$retval=$co->execquery($sql, $cc);
		
		if(! $retval)
		{
			die( "could not create table" );
		}
		
		else {
			// echo "table created";
			}
	 
	  }
	  
	  public function insertitem()
	  {
		$co = new DbConnection();
		$cc=$co->Connection();
		$iname=$this->iname;
		$amount=$this->amount;
		$price=$this->price;
		$pdate=$this->pdate;
		$edate=$this->edate;
		
			
	    $sql="INSERT INTO items ". "(item_name, amount,price,production_date,expire_date) ". 
		"VALUES('$iname','$amount','$price','$pdate','$edate')";
		$retval=$co->execquery($sql, $cc);
		
		if(! $retval)
		{
			die( "could not insert data");
		}
		
		else {
			// echo "New Data inserted.";
			header('location:Itemtable.php');
			}
	 
	}
	
	
}
?>