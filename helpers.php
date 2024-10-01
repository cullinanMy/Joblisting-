<?php
/**
 * 
 * get the base path 
 * 
 */

 function basePath($path = '')
 {
    return __DIR__ . $path;

 }


 /**
  * load view 


  */


  function loadview ($name){

    require basePath('views/{$name}.view.php');


  }


?>