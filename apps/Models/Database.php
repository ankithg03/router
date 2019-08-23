<?php
/**
 * @package Code03
 * @author ankith@codilar.com
 * @version v.01
 */
 class Database{
    /**
     * @return object PDO(php Data Objects)
     */
    public function connect(){
        $pdo = new PDO("mysql:host=localhost;dbname=mvcSampleDB;charset=utf8","ankith","root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    /**
     * @param string query
     * @param array parameters
     * @return array rows of Data
     */
    public function query($query, $params = array()){
        $statement=$this->connect()->prepare($query);
        $statement->execute($params);
        if(explode(' ',$query)[0] == 'SELECT'){
            $data=$statement->fetchAll();
            return $data; 
        }

    }
}

