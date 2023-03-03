<?php

class Penalite{
    private int $idPenalite;
    private string $libelle;
    private float $prix;
    private string $date;
    private int $quantite;
    private static $count = 0;


    public function __construct($libelle,$prix,$quantite)
    {
        $this -> libelle = $libelle;
        $this -> prix = $prix;
        $this -> quantite = $quantite;
        $this -> idPenalite = self :: $count ++ ;
        
    }

    /**
     * Get the value of idPenalite
     */ 
    public function getIdPenalite()
    {
        return $this->idPenalite;
    }

    /**
     * Set the value of idPenalite
     *
     * @return  self
     */ 
    public function setIdPenalite($idPenalite)
    {
        $this->idPenalite = $idPenalite;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of count
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @return  self
     */ 
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get the value of quantite
     */ 
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */ 
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
}




?>