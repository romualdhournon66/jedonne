<?php

class ppro_articles extends database {

    public $id = 0;
    public $title = '';
    public $description = '';
    public $picture1 = '';
    public $picture2 = '';
    public $picture3 = '';
    public $dateArticle = '';
    public $id_ppro_articleStatus = '';
    public $id_ppro_cities = '';
    public $id_ppro_subCategories = '';
    public $id_ppro_users = '';

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Méthode qui permet à un utilisateur de s'enregistrer sur le site
     * @return type
     */
    function addArticle() {
        $query = 'INSERT INTO `ppro_articles` (`id`,`title`,`description`,`picture1`,`picture2`,`picture3`,`dateArticle`,`id_ppro_articleStatus`,`id_ppro_cities`,`id_ppro_subCategories`,`id_ppro_users`) '
                . 'VALUE (:id, :title, :description, :picture1, :picture2, :picture3, :dateArticle, :id_ppro_articleStatus, :id_ppro_cities, :id_ppro_subCategories, :id_ppro_users)';
        $result = $this->db->prepare($query);
        $result->bindValue(':id', $this->id, PDO::PARAM_INT);
        $result->bindValue(':title', $this->title, PDO::PARAM_STR);
        $result->bindValue(':description', $this->description, PDO::PARAM_STR);
        $result->bindValue(':picture1', $this->picture1, PDO::PARAM_INT);
        $result->bindValue(':picture2', $this->picture2, PDO::PARAM_STR);
        $result->bindValue(':picture3', $this->picture3, PDO::PARAM_STR);
        $result->bindValue(':dateArticle', $this->dateArticle, PDO::PARAM_INT);
        $result->bindValue(':id_ppro_articleStatus', $this->id_ppro_articleStatus, PDO::PARAM_INT);
        $result->bindValue(':id_ppro_cities', $this->id_ppro_cities, PDO::PARAM_INT);
        $result->bindValue(':id_ppro_subCategories', $this->id_ppro_subCategories, PDO::PARAM_INT);
        $result->bindValue(':id_ppro_users', $this->id_ppro_users, PDO::PARAM_INT);
        return $result->execute();
    }
    
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
}
