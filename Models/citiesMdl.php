<?php

class ppro_cities extends database {

    public $id = 0;
    public $zipCode = '';
    public $city = '';
    public $id_ppro_departments = '';
    

    function __construct() {
        parent::__construct();
    }
    
    /**
     * methode pour afficher la liste des villes
     * @return type
     */
    public function listCities() {
        $result = array();
        $query = 'SELECT `id`,`zipCode`,`city`,`id_ppro_departments` FROM `ppro_cities` ORDER BY `id` ASC';
        $queryResult = $this->db->query($query);
        if (is_object($queryResult)) {
            $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
       
}
