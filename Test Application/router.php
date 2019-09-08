<?php 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//ROUTER/DESPATCHER
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class router{
  private $controller;
  private $action;
  private $params;

  public function manual($controller, $action, $params=null){
    $controller_name = $controller."_controller";
    include_once("controller/".$controller_name.".php");
    $controller = new $controller_name();
    $controller->{$action}($params);

  }

  public function invoke($default_controller, $default_action, $default_params=null) {
    //Controller
    if (isset($_GET['controller']) ) {
       $this->controller = $_GET['controller'];
    }else{
      $this->controller = $default_controller;
    }
    
    //Action
    if (isset($_GET['action']) ) {
       $this->action = $_GET['action'];
    }else{
      $this->action = $default_action;
    }
    
    //Params
    if (isset($_GET['params']) ) {
       $this->params = $_GET['params'];
       //$this->params = split('[/.-]', $this->param);
    }else{
      $this->params = $default_params;
    }
    
    //Combination of all
    $controller_name = $this->controller."_controller";
    $controller_path = "controller/".strtolower($controller_name).".php";

    //include and create
    if(file_exists($controller_path)){
      include_once($controller_path);
      $this->controller = new $controller_name();//creating the object

      if(method_exists( $this->controller , $this->action )){
        $this->controller->{$this->action}($this->params);//starting controller class with parameter  
      }else{
        $error = 'Error action "'.$this->action.'" doesn\'t exist.';
        include_once("view/error.php");
      }

      
    }
    else if(!file_exists($controller_path)){
      $error = 'Error controller "'.$this->controller.'" doesn\'t exist.';
      include_once("view/error.php");
    }
  }

}
?>

