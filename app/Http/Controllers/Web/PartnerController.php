<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;
use Illuminate\Routing\Controller;


class PartnerController extends Controller
{
    public function index() {
        $partners = Partner::latest()->paginate(6);
        return view('front.partners', compact('partners'));
    }
}
