<?php
include("../modele/class/Profil.class.php");

class User extends Personne {
    
    private string $login;
    private string $motDePass;
    private Profil $profil;
    private $mail;
    
    public function __construct($login,$motDePass,$nom,$prenom,$type,$mail){
        parent::__construct($nom,$prenom);
        $this -> login = $login;
        $this -> motDePass = $motDePass;
        $this -> profil = new Profil ($type);
        $this -> mail = $mail;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Set the value of motDePass
     *
     * @return  self
     */ 
    public function setMotDePass($motDePass)
    {
        $this->motDePass = $motDePass;

        return $this;
    }

    /**
     * Get the value of motDePass
     */ 
    public function getMotDePass()
    {
        return $this->motDePass;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
}