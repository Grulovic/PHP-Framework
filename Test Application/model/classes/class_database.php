 <?php
interface database{
	//constructor
	//public function __construct();
	
	//establishing connection
	public function connection();
	
	//closing connection
	public function close_connection();
	
	//running a sql statement
	public function runsql($query);	
}
?>