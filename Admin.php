<?php
include ('Dbconnection.php');

     class Admin{
		private $fname;
		private $lname;
		private $email;
        private $password;

		
		function __construct($fname,$lname,$email,$password)
        {
			$this->email=$email;
			$this->fname=$fname;
			$this->lname=$lname;
			$this->password=$password;
		}
		 
	   public function Admininfo()
       {
		$co = new DbConnection();
		$cc=$co->Connection();
		$email=$this->email;
		$fn=$this->fname;
		$ln=$this->lname;
		$pa=$this->password;
		// $pass=password_hash($pa,PASSWORD_BCRYPT);
	    $sql="INSERT INTO admin ". "(first_name, last_name, email, password) ". "VALUES('$fn','$ln','$email','$pa')";
		$retval=$co->execquery($sql, $cc);
		
		if(! $retval)
		{
			die( "could not insert data" . mysqli_error($cc));
		}
		
		else {
			// echo "New Data inserted.";
            header('location:item.php');
			}
	 
	}
	
	
	
}
?>