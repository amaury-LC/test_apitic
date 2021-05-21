<?php

namespace App\POO;


class Personnage
{

    private $pseudo = "";
    private $race = "";
    private $classe = "";
    private $specification = "";
    private $armure = "";
    private $proprietaire = "";
    private $detail = "";
    private $point_de_vie = "";
    private $id = "";
    




    function __construct($pseudo, $race, $classe, $specification, $armure, $proprietaire,$detail,$point,$id)
    {

        $this->pseudo = $pseudo;
        $this->race = $race;
        $this->classe = $classe;
        $this->specification = $specification;
        $this->armure = $armure;
        $this->proprietaire = $proprietaire;
        $this->detail = $detail;
        $this->point_de_vie = $point;
        $this->id = $id;

    }

    public function getPseudo()
    {

        return $this->pseudo;
    }

    public function getRace()
    {

        return $this->race;
    }

    public function getClasse()
    {

        return $this->classe;
    }

    public function getSpecification()
    {

        return $this->specification;
    }

    public function getArmure()
    {

        return $this->armure;
    }

    public function getProprietaire()
    {

        return $this->proprietaire;
    }

    public function getDetail()
    {

        return $this->detail;
    }

    public function getPointDeVie()
    {

        return $this->point_de_vie;
    }

    public function getId()
    {

        return $this->id;
    }
}
