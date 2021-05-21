<?php

namespace App\POO;

use App\POO\ClassPersonnage;

class ListeClassePersonnage
{

    private $Listeclasse_personnage = array();







    function __construct()
    {
      array_push($this->Listeclasse_personnage, new ClassPersonnage("Guerrier","Arme","Fureur","Protection", "Je suis un guerrier avec la spécialisation "));
      array_push($this->Listeclasse_personnage, new ClassPersonnage("Mage","Givre","Feu","Arcane", "Je suis un mage avec la spécialisation "));
      array_push($this->Listeclasse_personnage, new ClassPersonnage("Prêtre","Sacré","Discipline","Ombre", "Je suis un prêtre avec la spécialisation "));
      array_push($this->Listeclasse_personnage, new ClassPersonnage("Chasseur","Précision","Maîtrise des Bêtes","Survie", "Je suis un chasseur avec la spécialisation "));

      

    
        
    }

    function getArray(){

      return $this->Listeclasse_personnage;
    }

    
}