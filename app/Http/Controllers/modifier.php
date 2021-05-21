<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\ListeClassePersonnage;
use App\POO\Personnage;

class Modifier extends Controller
{

    public function show($id)
    {
        $personnageModifier = "";
        if (DB::connection()) {

            $personnages = DB::select('select * from personnages where id = :id ', ['id' => $id]);

            foreach ($personnages as $personnage) {

                $personnageModifier = new personnage($personnage->pseudo, $personnage->race, $personnage->classe, $personnage->specification, $personnage->armure, $personnage->proprietaire, $personnage->detail, $personnage->point_de_vie, $personnage->id);
            }
        }




        $TablisteClassPersonnage = new ListeClassePersonnage();


        $NbTablisteClassPersonnage =  $TablisteClassPersonnage->getArray();




        return view('modifier', ["NbTablisteClassPersonnage" => $NbTablisteClassPersonnage, "personnagesmodifier" => $personnageModifier, "id" => $id]);
    }
}
