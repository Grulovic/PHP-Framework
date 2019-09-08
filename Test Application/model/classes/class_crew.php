<?php
class crew {
	//variables
	private $id;
	private $manager;
	private $task;
	//extra
	private $proj_num;
	private $assgn_num;
	
	//constructor
	public function __construct($id, $manager, $task, $proj_num, $assgn_num)  {
		$this->id = $id;
		$this->manager = $manager;  
	    $this->task = $task;
	    
	    $this->proj_num = $proj_num;
	    $this->assgn_num = $assgn_num;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

	public function get_manager()	{return $this->manager;}
	public function set_manager($manager)	{$this->manager = $manager;}

	public function get_task()	{return $this->task;}
	public function set_task($task)	{$this->task = $task;}

	public function get_proj_num()	{return $this->proj_num;}
	public function set_proj_num($proj_num)	{$this->proj_num = $proj_num;}

	public function get_assgn_num()	{return $this->assgn_num;}
	public function set_assgn_num($assgn_num)	{$this->assgn_num = $assgn_num;}
}
?>

