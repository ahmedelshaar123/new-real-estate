<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompanyTeam;
use App\Models\Contact;
use App\Models\EmailSubscription;
use App\Models\FeaturedEstate;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $lang = \LaravelLocalization::getCurrentLocale();
        $name = 'name_' . $lang;
        $title = "title_$lang";
        $desc = 'desc_' . $lang;
        $search = $request->get('search');
        $data = $request->get('dataUrl');
        if($request->input('dataUrl') == 'partners') {
            $partners = Partner::where('link', 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('partners','data'));
        }
        elseif ($request->input('dataUrl') == 'team') {
            $job = 'job_' . $lang;
            $comp_team =  CompanyTeam::where($name, 'like', '%' . $search . '%')
            ->orWhere($job, 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('comp_team', 'name', 'data', 'job'));
        }
        elseif ($request->input('dataUrl') == 'posts') {
            $posts = Post::where($title, 'like', '%' . $search . '%')
            ->orWhere($desc, 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('posts', 'title', 'desc', 'data'));
        }
        elseif ($request->input('dataUrl') == 'subscribers') {
            $subscribers = EmailSubscription::where('email', 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('subscribers','data'));
        }
        elseif ($request->input('dataUrl') == 'services') {
            $services = Service::where($title, 'like', '%' . $search . '%')
            ->orWhere($desc, 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('services', 'title', 'desc', 'data'));
        }
        elseif ($request->input('dataUrl') == 'contacts') {
            $contacts = Contact::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phone', 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('contacts','data'));
        }
        elseif ($request->input('dataUrl') == 'featured') {
            $address = "address_$lang";
            $feat_estates = FeaturedEstate::where($title, 'like', '%' . $search . '%')
            ->orWhere($address, 'like', '%' . $search . '%')->get();
            return view('admin.ajax_search_table', compact('feat_estates','data', 'title', 'address'));
        }
    }
}
