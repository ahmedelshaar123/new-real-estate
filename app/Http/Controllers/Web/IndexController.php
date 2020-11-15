<?php

namespace App\Http\Controllers\Web;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index() {
        return view('front.index');

    }
}
