<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function searchNews(Request $request) {
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = "title_$lang";
        $desc = "desc_$lang";
        $posts = Post::where($title, 'like', '%' . $request->search . '%')
            ->orWhere($desc, 'like', '%' . $request->search . '%')->latest()->paginate(6);
        $partners = Partner::all();
        return view('front.posts', compact('posts', 'partners', 'title', 'desc'));

    }
}
