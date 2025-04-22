<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }
    
    public function showAllUsers(){
        return view("pages.auth.users", [
            "users"=>User::all()
        ]);
    }
    /**
     * Crée un nouvel utilisateur avec son rôle et ses permissions.
     *
     * @param Request $request
     */
    public function createUser(Request $request)
    {
        // Validation des données entrantes
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'. $request->user_id,
            'password' => 'required|string|min:6',
            'role' => 'required|in:ADMIN,USER',
        ]);

        // Création de l'utilisateur
        $user = User::updateOrCreate(
            ["id"=>$request->user_id ?? ''],
            [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->back()->with('success', 'Utilisateur créé avec succès.');
    }
}
