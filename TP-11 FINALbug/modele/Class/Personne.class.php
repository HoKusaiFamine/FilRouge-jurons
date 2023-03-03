<?php

 abstract class Personne {

    protected int $idPersonne;
    protected string $nom;
    protected string $prenom;
    protected static $count = 1;
   

    public function __construct($nom,$prenom){
        $this ->idPersonne = self::$count++;
        $this -> nom = $nom;
        $this -> prenom = $prenom;
    }


    /**
     * Get the value of idPersonne
     */ 
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set the value of idPersonne
     *
     * @return  self
     */ 
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}


?>