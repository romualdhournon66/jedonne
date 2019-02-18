<?php

class ppro_departments extends database {

    public $id = 0;
    public $code = '';
    public $department = '';
    

    function __construct() {
        parent::__construct();
    }
    
    /**
     * methode pour afficher la liste des départements
     * @return type
     */
    public function listDepartments() {
        $result = array();
        $query = 'SELECT `id`,`code`,`department` FROM `ppro_departments` ORDER BY `id` ASC';
        $queryResult = $this->db->query($query);
        if (is_object($queryResult)) {
            $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
       
}
