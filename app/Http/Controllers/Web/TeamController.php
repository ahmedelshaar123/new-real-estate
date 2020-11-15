<?php

namespace App\Http\Controllers\Web;

use App\Models\CompanyTeam;
use App\Models\Partner;
use Illuminate\Routing\Controller;

class TeamController extends Controller
{
    public function index() {
        $lang = \LaravelLocalization::getCurrentLocale();
        $name = "name_$lang";
        $job = "job_$lang";
        $team = CompanyTeam::all();
        $partners = Partner::all();
        return view('front.team', compact('team' , 'name', 'job', 'partners'));
    }
}
