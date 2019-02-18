<?php

class ppro_subCategories extends database {

    public $id = 0;
    public $subCategory = '';
    public $id_ppro_categories = '';
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * methode pour afficher la liste des sous catégories
     * @return type
     */
    public function listSubCategory() {
        $result = array();
        $query = 'SELECT `id`,`subCategory`,`id_ppro_categories` FROM `ppro_subCategories` WHERE `id_ppro_categories` = :id_ppro_categories';
        $queryResult = $this->db->prepare($query);
        $queryResult->bindValue(':id_ppro_categories', $this->id_ppro_categories, PDO::PARAM_INT);
        $queryResult->execute();
        if (is_object($queryResult)) {
            $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
       
}
