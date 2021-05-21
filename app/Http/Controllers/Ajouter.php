<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\POO\ListeClassePersonnage;

class Ajouter extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
    
        

       $TablisteClassPersonnage = new ListeClassePersonnage();

        
      $NbTablisteClassPersonnage =  $TablisteClassPersonnage->getArray();
       
        
        return view('Ajouter', ["NbTablisteClassPersonnage" => $NbTablisteClassPersonnage] );
    }
}