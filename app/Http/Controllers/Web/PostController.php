<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index() {
        $posts= Post::latest()->paginate(6);
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = "title_$lang";
        $desc = "desc_$lang";
        $partners = Partner::all();
        $services = Service::all();
        return view('front.posts', compact('posts', 'title', 'desc', 'partners', 'services'));
    }
}
