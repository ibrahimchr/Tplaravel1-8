<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
$nom='bouzaien';
$prenom='malek';
return view('etudiant',compact('nom,prenom'));

    }
    




}
