<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Formateur;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }


    public function index(){
        return view("pages.auth.dashboard");
    }

    /**
     * Crée une nouvelle formation
     * @param Request $request
     * @return mixed
    */
    public function createFormation(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'media' => 'required|string',
            'price' => 'required|string',
            'module' => 'required|string',
            'quize' => 'required|string',
            'lang' => 'nullable|string',
            'date' => 'nullable|string',
            'durée' => 'nullable|string',
            'time' => 'nullable|string',
            'place' => 'nullable|string',
            'type' => 'nullable|string',
            'spotlink' => 'nullable|string',
            'domaine_id' => 'required|exists:domaines,id',
            'formateur_id' => 'required|exists:formateurs,id',
            'slider' => 'nullable|boolean',
        ]);

        $data['slot'] = Str::slug(strtolower($data['title']));
        $data["user_id"] = Auth::id();
        $formation = Formation::create($data);
        return response()->json(['message' => 'Formation créée avec succès', 'data' => $formation], 201);
    }


    /**
     * Crée un nouveau formateur
     * @param Request $request
     * @return mixed
    */
    public function createFormateur(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'gender' => ['required', Rule::in(['Homme', 'Femme'])],
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $data["user_id"] = Auth::id();
        $formateur = Formateur::create($data);
        return response()->json(['message' => 'Formateur créé avec succès', 'data' => $formateur], 201);
    }


    /**
     * Crée un nouveau domaine
     * @param Request $request
     * @return mixed
    */
    public function createDomaine(Request $request)
    {
        $data = $request->validate([
            'libelle' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $data["user_id"] = Auth::id();
        $domaine = Domaine::create($data);
        return response()->json(['message' => 'Domaine créé avec succès', 'data' => $domaine], 201);
    }
}
