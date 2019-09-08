<?php
class assignment {
	//variables
	private $id;
	private $project;
	private $crew;
	private $start;
	private $finish;
	private $type;
	
	//constructor
	public function __construct($id, $project, $crew, $start, $finish, $type)  {
		$this->id = $id;
		$this->project = $project;  
		$this->crew = $crew;  
	    $this->location = $location;
	    $this->start = $start;
	    $this->finish = $finish;
	    $this->type = $type;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($name)	{$this->id = $id;}

    public function get_project()	{return $this->project;}
	public function set_project($project)	{$this->project = $project;}

	public function get_crew()	{return $this->crew;}
	public function set_crew($crew)	{$this->crew = $crew;}

	public function get_start()	{return $this->start;}
	public function set_start($start)	{$this->start = $start;}
	
	public function get_finish()	{return $this->finish;}
	public function set_finish($finish)	{$this->finish = $finish;}

	public function get_type()	{return $this->type;}
	public function set_type($type)	{$this->type = $type;}
}
?>

