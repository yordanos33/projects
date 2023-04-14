<?php
	class DbConnection{
		    private $dbhost = 'localhost';
            private $dbuser = 'root';
            private $dbpass = '';
			
			
			
		public	function Connection()
		{
				$conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);
            if(! $conn ) 
            {
				die('Could not connect: ');
			}	
		else {
            // echo"connected with mysql server <br>";
			return $conn;
			}
		
			}
			public function execquery($stmt, $conn)
            {
				mysqli_select_db($conn,'grocery');
				$return=mysqli_query($conn,$stmt);
				
				return $return;
			}
	}
	
	
?>