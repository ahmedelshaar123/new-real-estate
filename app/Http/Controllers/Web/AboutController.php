<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;
use App\Models\StaticPage;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index() {
        $desc = StaticPage::where('key', 'desc')->first();
        $vision = StaticPage::where('key', 'vision')->first();
        $message = StaticPage::where('key', 'message')->first();
        $lang = \LaravelLocalization::getCurrentLocale();
        $value = "value_$lang";
        $partners = Partner::all();
        return view('front.about', compact('desc', 'message', 'vision','value', 'partners'));
    }
}
