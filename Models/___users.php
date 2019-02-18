<?php

class users extends database {

    public $id = 0;
    public $username = '';
    public $mail = '';
    public $password = '';
    public $dateRegistrer = '2000-01-01';
    public $idGroup = 2; //2 est le membre

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
        $result->bindValue(':pass', $this->password, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Méthode qui vérifie si une adresse mail est libre. 
     * 0 : L'adresse mail n'existe pas
     * 1 : Elle existe
     * @return type
     */
    function checkFreeMail() {
        $query = 'SELECT COUNT(*) AS `nbMail` FROM `ppro_users` WHERE `mail` = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->execute();
        $checkFreeMail = $result->fetch(PDO::FETCH_OBJ);
        return $checkFreeMail->nbMail;
    }

    /**
     * Méthode qui retourne le hashage du mot de passe du compte sélectionné.
     * @return type
     */
    function getHashFromUser() {
        $query = 'SELECT `pass` FROM `ppro_users` WHERE `mail` = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Méthode qui récupère les infos utiles de l'utilisateur après sa connection
     * @return type
     */
    function getUserInfo() {
        $query = 'SELECT `username`, `idGroup` FROM `ppro_users` WHERE `mail` = :mail';
        $result = $this->db->prepare($query);
        $result->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }

}
