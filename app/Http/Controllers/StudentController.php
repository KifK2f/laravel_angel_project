<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //le controller pour gere les etdudiants
    public function index() {
        // return view('students.index');
        $students = [
            ["id" => 1, "nom" => "AKPALOU", "prenom" => "Kokou Jean-Marie", "sexe" => "M", "telephone"=> "93255547"],
            ["id" => 2, "nom" => "FIANYO", "prenom" => "Kodzovi Friedo", "sexe" => "M", "telephone"=> "92147789"],
            ["id" => 3, "nom" => "EKLOU", "prenom" => "Lauryne", "sexe" => "F", "telephone"=> "91002547"],
            ["id" => 4, "nom" => "GAKPE", "prenom" => "Koffi Josias", "sexe" => "M", "telephone"=> "99557814"],           
            ["id" => 5, "nom" => "APEDO", "prenom" => "Norbert", "sexe" => "M", "telephone"=> "98251477"],
            ["id" => 6, "nom" => "AGBELI", "prenom" => "Jessica", "sexe" => "F", "telephone"=> "90254478"],
            ["id" => 7, "nom" => "DOUTI", "prenom" => "Victoria", "sexe" => "F", "telephone"=> "96554789"],
            ["id" => 8, "nom" => "ATIGAKOU", "prenom" => "Anita", "sexe" => "F", "telephone"=> "98254473"],           
            ["id" => 9, "nom" => "ISSA", "prenom" => "Mohamed", "sexe" => "M", "telephone"=> "93665478"],
            ["id" => 10, "nom" => "ZITI", "prenom" => "Imelda", "sexe" => "F", "telephone"=> "90147789"],
        ];

        return view('students.index', compact('students'));
    }

    // public function create() {
    //     return view('students.create');
    // }


    public function create() { 
        return view('students.create');
    }

    // stocker un etudaiant c'est lequivalent du @RequestBody au niveau de Spring Boot
    public function store(Request $request) {
        // dd($request->name); //Afficher juste le nom
        dd($request-> all());
        //dd = dump and die

    }

}
