<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\ListeClassePersonnage;

class Modifierdonnee extends Controller
{

    public function show($id)
    {

        if (isset($_POST['specification'])) {

            $spseudo = $_POST['pseudo'];
            $race = $_POST['race'];
            $classe = $_POST['classe'];
            $specification = $_POST['specification'];
            $armure = $_POST['armure'];
            $proprietaire = $_POST['proprietaire'];
            $detail = $_POST['detail'] . $specification;
            $point = 200;





            DB::update(
                'update personnages set pseudo = "' . $spseudo . '", race = "' . $race . '", classe = "' . $classe . '", specification = "' . $specification . '", armure ="' . $armure . '",proprietaire = "' . $proprietaire . '", detail = "' . $detail . '", point_de_vie = "' . $point . '" where id = ?',
                [$id]
            );



            return redirect('/');
        } else {

            return redirect('/modifier/' . $id);
        }
    }
}
