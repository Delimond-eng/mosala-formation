<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\Slider;
use App\Models\Souscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::with(["formation.domaine", "formation.formateur"])->get();
        $formations = Formation::with(["domaine", "formateur"])->orderByDesc("id")->paginate(6);
        return view('home', ["formations"=>$formations, "sliders"=>$sliders]);
    }

    public function moreCourses(Request $request)
    {
        $query = Formation::with(['domaine', 'formateur']);

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->filled('domaine')) {
            $query->where('domaine_id', $request->domaine);
        }

        $formations = $query->paginate(6)->withQueryString(); // garde les paramètres dans la pagination

        $domaines = Domaine::all();
        $formateurs = Formateur::all();

        return view('pages.more-courses', [
            'formations' => $formations,
            'formateurs' => $formateurs,
            'domaines' => $domaines,
        ]);
    }

    public function courseDetails(Request $request)
    {
        $slug = $request->query("slug");
        $formation = Formation::with(["domaine", "formateur"])->where("slug", $slug)->first();

        if (!$formation) {
            abort(404, "Formation non trouvée.");
        }
        return view('pages.course-single', ["formation"=>$formation]);
    }


    public function souscrire(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'pays' => 'required|string',
            'ville' => 'required|string',
            'formation_id' => 'required|exists:formations,id',
        ]);

        try {
            Souscription::create([
                'fullname' => $request->fullname,
                'phone' => $request->phone,
                'email' => $request->email,
                'pays' => $request->pays,
                'ville' => $request->ville,
                'formation_id' => $request->formation_id,
                'user_id' => Auth::id(), 
            ]);
            return back()->with('success', 'Votre inscription a été enregistrée avec succès !');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue. Veuillez réessayer plus tard.');
        }
    }
}
