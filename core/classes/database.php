<?php
	class Database
	{
		var $database = '';
		var $host     = '';
		var $dbname   = '';
		var $user     = '';
		var $password = '';
		var $type     = '';

		function __construct($host, $dbname, $user, $password, $type)
		{

			$this->host     = $host;
			$this->dbname   = $dbname;
			$this->user     = $user;
			$this->password = $password;
			$this->type     = $type;
			$this->connect();
		}
		public function connect()
		{
			switch($this->type)
			{
				case 'pdo':
					try
					{
					  $this->database = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
					}
					catch(PDOException $e) {
					    echo $e->getMessage();
					}
				break;
				case 'mysqli':
					$this->database = new mysqli($this->host, $this->user, $this->password, $this->dbname);

					/* check connection */
					if (mysqli_connect_errno()) {
					    printf("Connect failed: %s\n", mysqli_connect_error());
					    exit();
					}
				break;
			}
		}
		public function query($query)
		{
			switch($this->type)
			{
				case 'pdo':
					if($this->database->prepare($query)->execute())
					{
						return true;
					}
					else
					{
						return false;
					}
				break;
				case 'mysqli':
					//$query = $this->database->real_escape_string($query);
					if($this->database->query($query))
					{
						return true;
					}
					else
					{
						return false;
					}
				break;
			}
		}
		public function find($query)
		{
			switch($this->type)
			{
				case 'pdo':
					$test = $this->database->prepare($query);
					$test->execute();
					$return = array();
					while($result = $test->fetch())
					{
						$return[] = $result;
					}
					return $return;
				break;
				case 'mysqli':
					$query = $this->database->real_escape_string($query);
					if($result = $this->database->query($query))
					{
						$return = array();
						while($row = $result->fetch_assoc())
						{
							$return[] = $row;
						}
						return $return;
					}
					else
					{
						return false;
					}
				break;
			}
		}
	}