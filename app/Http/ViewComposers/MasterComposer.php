<?php
namespace App\Http\ViewComposers;

use App\Models\Setting;
use App\Models\StaticPage;
use App\Models\TopSlider;
use Illuminate\View\View;

class MasterComposer
{
    public function compose(View $view)
    {
        $lang = \LaravelLocalization::getCurrentLocale();
        $view->with('valueVC', "value_$lang");
        $view->with('descVC', "desc_$lang");
        $view->with('titleVC', "title_$lang");
        $view->with('facebookVC', Setting::where('key', 'facebook_url')->first());
        $view->with('twitterVC', Setting::where('key', 'twitter_url')->first());
        $view->with('instagramVC', Setting::where('key', 'instagram_url')->first());
        $view->with('emailVC', Setting::where('key', 'email')->first());
        $view->with('latVC', Setting::where('key', 'lat')->first());
        $view->with('lngVC', Setting::where('key', 'lng')->first());
        $view->with('addressVC', Setting::where('key', 'address')->first());
        $view->with('workTimesVC', Setting::where('key', 'work_times')->first());
        $view->with('footerDescVC', StaticPage::where('key', 'footer_desc')->first());
        $view->with('phoneVC', Setting::where('key', 'phone')->first());
        $view->with('topSlidersVC', TopSlider::all());
    }
}
