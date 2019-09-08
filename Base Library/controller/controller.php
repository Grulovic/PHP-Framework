<?php
//abstract controller -> used for extending
abstract class controller {
	abstract function __construct();
	abstract function invoke($param);
}

?>

