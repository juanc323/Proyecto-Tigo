<?php 

// require_once('core/core.php');


 $c=isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index';


 $m=isset($_REQUEST['m']) ? ($_REQUEST['m']) : 'index';

 
 require_once('controllers/'.$c.'Controller.php');

 $c=$c.'Controller'; 
 $objeto= new $c(); 
 $objeto->$m(); 
 

?>