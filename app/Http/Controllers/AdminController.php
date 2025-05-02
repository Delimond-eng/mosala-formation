<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Formateur;
use App\Models\Formation;
use App\Models\Slider;
use App\Models\Souscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }


    public function index(){
        $countSubscriptions = Souscription::count();
        $countSubscriptionsNow = Souscription::whereDate("created_at", Carbon::now())->count();
        $countFormations = Formation::count();
        return view("pages.auth.dashboard",[
            "count1"=>$countSubscriptions,
            "count2"=>$countFormations,
            "count3"=>$countSubscriptionsNow,
        ]);
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
            'media' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif',
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
            'formateur_id' => 'required|exists:formateurs,id'
        ]);
        
        // 📁 Traitement du fichier image
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('uploads/formations'), $fileName);
            $data['media'] = url('uploads/formations/' . $fileName); 
        }
        
        $data['slug'] = Str::slug(strtolower($data['title']));
        $data["user_id"] = Auth::id();
        
        $formation = Formation::create($data);

        return redirect()->back()->with('success', 'Configuration enregistrée avec succès.');
        
        /* return response()->json([
            'message' => 'Formation créée avec succès',
            'data' => $formation
        ], 201); */
        
    }
    public function createSlider(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'datedebut' => 'required|date',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif',
            'formation_id' => 'required|exists:formations,id'
        ]);
        try{
            if ($request->hasFile('media')) {
                $file = $request->file('media');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->move(public_path('uploads/sliders'), $fileName);
                $data['media'] = url('uploads/sliders/' . $fileName); 
            }
            $data["user_id"] = Auth::id();
            $slider = Slider::create($data);
            return redirect()->back()->with('success', 'Configuration enregistrée avec succès.');
        }
        catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
      
        
        /* return response()->json([
            'message' => 'Formation créée avec succès',
            'data' => $formation
        ], 201); */
        
    }
    public function createTeacher(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'nickname' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'gender' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp,avif',
        ]);
        try{
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->move(public_path('uploads/teachers'), $fileName);
                $data['photo'] = url('uploads/teachers/' . $fileName); 
            }
            $data["user_id"] = Auth::id();
            $slider = Formateur::create($data);
            return redirect()->back()->with('success', 'Formateur enregistrée avec succès.');
        }
        catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
        
    }

    public function viewFormationPage(){
        $domaines = Domaine::all();
        $formateurs = Formateur::all();
        $formations = Formation::with(["domaine", "formateur"])->orderByDesc("id")->paginate(6);
        return view("pages.auth.formations", [
            "domaines"=>$domaines,
            "formateurs"=>$formateurs,
            "formations"=>$formations
        ]);
    }
    public function viewFormateurPage(){
        $formateurs = Formateur::all();
        return view("pages.auth.formateurs", [
            "formateurs"=>$formateurs
        ]);
    }
    public function viewSliderPage(){
        $sliders = Slider::with(["formation", "user"])->get();
        $formations = Formation::all();
        return view("pages.auth.sliders", [
            "sliders"=>$sliders, "formations"=>$formations
        ]);
    }
    public function viewSubscribePage(){
        $subscriptions = Souscription::with("formation")
        ->with('user')
        ->get();
        return view("pages.auth.students", [
            "subscriptions"=>$subscriptions
        ]);
    }
    public function viewDomainePage(){
        $domaines = Domaine::with(["user"])->get();
        return view("pages.auth.config_domaines", [
            "domaines"=>$domaines
        ]);
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
        $domaine = Domaine::updateOrCreate(["id"=>$request->domaine_id ?? ''], $data);
        return redirect()->back()->with('success', 'Domaine créé avec succès.');
    }


    public function getSouscriptionsStats()
    {
        $souscriptions = Souscription::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupByRaw('MONTH(created_at)')
            ->pluck('total', 'month')
            ->toArray();

        // On prépare un tableau avec 0 par défaut pour chaque mois
        $monthlySouscriptions = array_fill(1, 12, 0);

        foreach ($souscriptions as $month => $total) {
            $monthlySouscriptions[$month] = $total;
        }

        // On remet l’indexation pour le graphique JS (index 0 à 11)
        $monthlySouscriptions = array_values($monthlySouscriptions);

        return response()->json($monthlySouscriptions);
    }

    public function triggerDelete(string $table, $val){
        $field = 'id';
        $result = DB::table($table)
            ->where($field, $val)
            ->delete();
        return redirect()->back()->with('success', 'Suppression effectuée avec succès.');
    }
}
