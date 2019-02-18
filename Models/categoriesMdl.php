<?php

class ppro_categories extends database {

    public $id = 0;
    public $category = '';
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * methode pour afficher la liste des category
     * @return type
     */
    public function listCategory() {
        $result = array();
        $query = 'SELECT `id`,`category` FROM `ppro_categories` ORDER BY `id` ASC';
        $queryResult = $this->db->query($query);
        if (is_object($queryResult)) {
            $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    
    
//    ///Méthode pour la pagination, création d'une variable qui affichera 5 patients par page
//    //   public $patientsPerPage = 5;
//
//    public function paging() {
//        $query = 'SELECT COUNT(`id`) FROM `ppro_categories`';
//        //fetchColumn retourne une colonne depuis la ligne suivant, sinon retourne false s'il n'y a plus de ligne
//        $total = $this->db->query($query)->fetchColumn();
//        //calcul du nombre de page qu'il va s'afficher, donc total de page divisé par nombre de patients par page
//        //ceil est une fonction php qui arrondi au nombre supérieur pour éviter les virgules possible
//        $result = ceil($total / $this->patientsPerPage);
//        return $result;
//    }
//
//    public function getPatientsForPaging() {
//        $query = 'SELECT `id`, `lastname`, `firstname`, DATE_FORMAT(`birthdate`, "%d/%m/%Y") AS `birthdate`, `phone`, `mail` '
//                . 'FROM `patients`'
//                . 'ORDER BY `id` asc LIMIT :page, ' . $this->patientsPerPage;
//        $queryResult = $this->db->prepare($query);
//        $queryResult->bindValue(':page', $this->id, PDO::PARAM_INT);
//        $queryResult->execute();
//        $result = $queryResult->fetchAll(PDO::FETCH_OBJ);
//        if (is_object($result)) {
//            $this->id = $result->id;
//        }
//        return $result;
//    }
//    
//    
//    
//    
//    
//    
//    
//    /**
//     * Méthode qui permet à un utilisateur de s'enregistrer sur le site
//     * @return type
//     */
//    function addUser() {
//        $query = 'INSERT INTO `ppro_users` (`username`,`mail`,`pass`) VALUE (:username, :mail, :pass)';
//        $result = $this->db->prepare($query);
//        $result->bindValue(':username', $this->username, PDO::PARAM_STR);
//        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
//        $result->bindValue(':pass', $this->pass, PDO::PARAM_STR);
//        return $result->execute();
//    }
//    
//    /**
//     * Méthode qui récupère les infos utiles de l'utilisateur après sa connection
//     * @return type
//     */
//    function getUserInfo() {
//        $query = 'SELECT `username`, `id_ppro_roles` FROM `ppro_users` WHERE `mail` = :mail';
//        $result = $this->db->prepare($query);
//        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
//        $result->execute();
//        return $result->fetch(PDO::FETCH_OBJ);
//    }
//    
//    
//    
}
