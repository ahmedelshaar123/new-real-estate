<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Web\ContactRequest;
use App\Models\Contact;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index() {
        return view('front.contact-us');
    }

    public function contact(ContactRequest $request) {
        Contact::create($request->all());
        session()->flash('key', 'سيتم مراجعة رسالتك من قبل الادارة');
        return redirect(url('/'));
    }
}
