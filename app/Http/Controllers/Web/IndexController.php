<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use App\Models\StaticPage;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index() {
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = "title_$lang";
        $desc = "desc_$lang";
        $value = "value_$lang";
        $services = Service::all();
        $description = StaticPage::where('key', 'desc')->first();
        return view('front.index', compact('services', 'title', 'desc', 'value', 'description'));

    }
}
