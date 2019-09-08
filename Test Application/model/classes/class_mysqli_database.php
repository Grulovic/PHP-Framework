 <?php
include_once("class_database.php");
class mysqli_database implements database{
	//variables
	private $user_name;
	private $host_name;
	private $password;
	private $database;
	private $connection;

	//constructor
	public function __construct($user_name, $host_name, $password, $database){
		$this->user_name = $user_name;
		$this->host_name = $host_name;
		$this->password = $password;
		$this->database = $database;
	}
	//establishing connection
	public function connection(){
		$this->connection = new mysqli($this->user_name, $this->host_name, $this->password, $this->database);
		if ($this->connection == true){
			echo 'Connected<br>';
		}
	}
	//closing connection
	public function close_connection(){
		if(isset($this->connection)){
			$this->connection->close();
			echo 'Closed<br>';
		}
	}
	//running a sql statement
	public function runsql($query){
		$results = $this->connection->query($query);
		return $results;
	}		
}
?>