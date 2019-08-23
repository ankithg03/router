<?php
/***
 * @param class Name
 * Returns Require Page Statement
 */
spl_autoload_register(function($class){
            $fileName=__DIR__."/apps/Controllers/".$class.".php";
            if(file_exists($fileName)){
                require($fileName);
            }
            $fileName=__DIR__."/apps/Models/".$class.".php";
            if(file_exists($fileName)){
                require($fileName);
            }
            $fileName=__DIR__."/apps/Views/".$class.".php";
            if(file_exists($fileName)){   
                require($fileName);
            }
});
require_once("Routes.php");
?>


