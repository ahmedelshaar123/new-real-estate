<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Web\EmailSubscribeRequest;
use App\Models\EmailSubscription;
use Illuminate\Routing\Controller;

class EmailSubscribeController extends Controller
{
    public function subscribeEmail(EmailSubscribeRequest $request) {
        EmailSubscription::create($request->all());
        session()->flash('success', 'تم الاشتراك بنجاح');
        return back();
    }
}
