<?php
class option {
	//variables
	private $id;
	private $name;
	private $controller;
	private $action;
	private $params;
	private static $counter = 0;
	
	//constructor
	public function __construct($name, $controller, $action, $params){
        $this->id = self::$counter;
	    $this->name = $name;

	    $this->controller = $controller;
	    $this->action = $action;
	    $this->params = $params;

	    self::$counter++;
    }
    //get and set functions
    public function get_id()	{return $this->id;}
	//public function set_id($id)	{$this->id = $id;}

	public function get_name()	{return $this->name;}
	public function set_name($name)	{$this->name = $name;}

	public function get_controller()	{return $this->controller;}
	public function set_controller($controller)	{$this->controller = $controller;}

	public function get_action()	{return $this->action;}
	public function set_action($action)	{$this->action = $action;}
	
	public function get_params()	{return $this->params;}
	public function set_params($params)	{$this->params = $params;}
}
?>