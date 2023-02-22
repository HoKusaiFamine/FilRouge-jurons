<?php

class Profil {

    private int $idProfil;
    private $type;
    private static $count = 1;

    public function __construct($type){
        $this -> type = $type;
        $this ->idProfil = self::$count;

    }




    /**
     * Get the value of idProfil
     */ 
    public function getIdProfil()
    {
        return $this->idProfil;
    }

    /**
     * Set the value of idProfil
     *
     * @return  self
     */ 
    public function setIdProfil($idProfil)
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }
}



?>