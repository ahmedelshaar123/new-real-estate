<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;
use App\Models\Service;
use Illuminate\Routing\Controller;

class ServiceController extends Controller
{
    public function index() {
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = "title_$lang";
        $desc = "desc_$lang";
        $services = Service::latest()->paginate(5);
        $partners = Partner::all();
        return view('front.services', compact('services', 'title', 'desc', 'partners'));
    }
}
