<?php 
/**
 * @package Code03
 * @author ankith@codilar.com
 * @version v.01
 */
class BaseController {
    /**
     * @param string viewName
     * @category viewFile required
     */
    public static function CreateView($viewName){  
        $fileName="apps/Views/$viewName.phtml";
        require_once($fileName);
    }
    /**
     * @return array userDetails
     */
    public function test(){
        $obj=new Database();
        return ($obj->query("SELECT * FROM users"));
    }
}

?>