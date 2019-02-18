<?php

class ppro_roles extends database {

    public $id = 0;
    public $role = '';
    
    function __construct() {
        parent::__construct();
    }
    
    /**
     * Méthode qui permet à un utilisateur de s'enregistrer sur le site
     * @return type
     */
    function addUser() {
        $query = 'INSERT INTO `ppro_users` (`username`,`mail`,`pass`) VALUE (:username, :mail, :pass)';
        $result = $this->db->prepare($query);
        $result->bindValue(':username', $this->username, PDO::PARAM_STR);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->bindValue(':pass', $this->pass, PDO::PARAM_STR);
        return $result->execute();
    }
    
    /**
     * Méthode qui récupère les infos utiles de l'utilisateur après sa connection
     * @return type
     */
    function getUserInfo() {
        $query = 'SELECT `username`, `id_ppro_roles` FROM `ppro_users` WHERE `mail` = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }
    
    
    
}