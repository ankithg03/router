<?php
/**
 * @package Code03
 * @author  ankith@codilar.com
 * @version v.01
 */
    class Route{
        /**
         * @var array validRoutes
         */
        private static $validRoutes=array();
        /**
         * @param string route
         * @param object function
         * @category setroute 
         */
        public function set($route, $function){
            
            self::$validRoutes[] = $route;
            if ($_GET['url'] == $route){
               
                $function->__invoke();  
                   
            }
        }
        public function getRoute(){
            return  self::$validRoutes;
        }
    } 

?>