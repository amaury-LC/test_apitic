<?php
namespace App\POO;


class ClassPersonnage
{

    private $name = "";
    private $specification1 = "";
    private $specification2 = "";
    private $specification3 = "";
    private $propriete = "";






    function __construct($name,$specification1,$specification2,$specification3,$propriete)
    {

      $this->name = $name;
      $this->specification1 = $specification1;
      $this->specification2 = $specification2;
      $this->specification3 = $specification3;
      $this->propriete = $propriete;
     
        
    }

    public function getName(){

        return $this->name;
    }

    public function getSpecification1(){

        return $this->specification1;
    }

    public function getSpecification2(){

        return $this->specification2;
    }

    public function getSpecification3(){

        return $this->specification3;
    }

    public function getPropriete(){

        return $this->propriete;
    }

    
}