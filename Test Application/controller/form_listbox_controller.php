<?php
include_once("form_controller.php");

class form_listbox_controller extends form_controller{
	public function invoke($param){
		$submit[] =  $_POST[$form->get_name()];
		include "view/form_submit_view.php";	
	}	
		
}
?>
