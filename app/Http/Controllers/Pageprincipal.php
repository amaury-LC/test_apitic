<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\Personnage;

class Pageprincipal extends Controller
{

    public function show()
    {
        $tableauPersonnage = array();



        if (DB::connection()) {

            $personnages = DB::select('select * from personnages ', [1]);

            foreach ($personnages as $personnage) {
                array_push($tableauPersonnage, new personnage($personnage->pseudo, $personnage->race, $personnage->classe, $personnage->specification, $personnage->armure, $personnage->proprietaire, $personnage->detail, $personnage->point_de_vie, $personnage->id));
            }
        }




        // $users = DB::select('select * from personnages ', [1]);

        // foreach ($users as $user) {
        //     echo $user->pseudo;
        // }

        return view('Pageprincipal', ["objectLignePersonnages" => $tableauPersonnage, "nbLigne" => 10]);
    }
}
