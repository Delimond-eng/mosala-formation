<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $formations = config("formations");
        return view('home', ["formations"=>$formations]);
    }

    public function moreCourses()
    {
        $formations = config("formations");
        return view('pages.more-courses', ["formations"=>$formations]);
    }

    public function courseDetails(Request $request)
    {
        $slot = $request->query("slot");
        $formations = config("formations");

        $formation = collect($formations)->firstWhere("slot", $slot);

        if (!$formation) {
            abort(404, "Formation non trouvée.");
        }
        return view('pages.course-single', ["formation"=>$formation]);
    }
}
