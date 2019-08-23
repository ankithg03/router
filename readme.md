.htaccess
router
MVC

*******************************************************AUTOLOAD*************************************************
// spl_autoload_register(function($class){
//   $class=explode("\\",$class);    
//   if(count($class)==1){

//     $class = end($class);

//             $fileName=__DIR__."/apps/Controllers/".$class.".php";
//             if(file_exists($fileName)){
            
//                 require($fileName);
//             }
//             $fileName=__DIR__."/apps/Models/".$class.".php";

//             if(file_exists($fileName)){

//                 require($fileName);

//             }
//             $fileName=__DIR__."/apps/Views/".$class.".php";

//             if(file_exists($fileName)){
                
//                 require($fileName);
//             }
//     }
//     else{
//         $parent=$class[0];
//         $class = end($class);
//         $fileName=__DIR__."/apps/$parent/".$class.".php";
//         print_r($fileName);
//         echo("<br>");
//         require($fileName);
//     }

// });
// require_once("Routes.php");