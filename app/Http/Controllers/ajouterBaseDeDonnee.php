<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\ListeClassePersonnage;

class AjouterBaseDeDonnee extends Controller
{

    public function show()
    {

        if (isset($_POST['specification'])) {
            $spseudo = $_POST['pseudo'];
            $race = $_POST['race'];
            $classe = $_POST['classe'];
            $specification = $_POST['specification'];
            $armure = $_POST['armure'];
            $armure = $_POST['armure'];
            $proprietaire = $_POST['proprietaire'];
            $detail = $_POST['detail'] . $specification;
            $point = 200;

            DB::insert('insert into personnages (pseudo, race,classe,specification,armure,proprietaire,detail,point_de_vie) values (?, ?, ?, ?, ?, ?, ?, ?)', [$spseudo, $race, $classe, $specification, $armure, $proprietaire, $detail, $point]);


            return redirect('/');
        } else {

            return redirect('/ajouter');
        }
    }
}
