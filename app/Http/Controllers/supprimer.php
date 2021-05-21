<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\Personnage;

class Supprimer extends Controller
{

    public function show($id)
    {

        DB::delete('delete from personnages where id= :id', ['id' => $id]);


        return redirect('/');
    }
}
