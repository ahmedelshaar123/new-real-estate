<?php

namespace App\Http\Controllers\Admin;

use App\Models\BottomSlider;
use App\Models\CompanyTeam;
use App\Models\Contact;
use App\Models\EmailSubscription;
use App\Models\FeaturedEstate;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use App\Models\TopSlider;
use App\User;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::count();
        $posts = Post::count();
        $partners = Partner::count();
        $services = Service::count();
        $topSliders = TopSlider::count();
        $bottom_sliders = BottomSlider::count();
        $companyTeam = CompanyTeam::count();
        $featured = FeaturedEstate::count();
        $subscribers = EmailSubscription::count();
        $users = User::count();
        $roles = Role::count();
        return view('admin.home', compact('users', 'roles', 'contacts','posts','partners','services','topSliders','bottom_sliders','companyTeam','featured','subscribers'));
    }
}
