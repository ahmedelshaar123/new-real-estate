<?php

namespace App\Http\Controllers\Web;

use App\Models\BottomSlider;
use App\Models\CompanyTeam;
use App\Models\FeaturedEstate;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\StaticPage;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index() {
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = "title_$lang";
        $address = "address_$lang";
        $name = "name_$lang";
        $job = "job_$lang";
        $desc = "desc_$lang";
        $value = "value_$lang";
        $services = Service::get()->take(3);
        $posts = Post::get()->take(3);
        $featuredEstates = FeaturedEstate::all();
        $team = CompanyTeam::all();
        $botSliders = BottomSlider::all();
        $partners = Partner::all();
        $description = StaticPage::where('key', 'desc')->first();
        return view('front.index', compact('posts','partners', 'botSliders', 'name', 'job', 'services', 'title', 'desc', 'value', 'description', 'address', 'featuredEstates', 'team'));

    }
}
