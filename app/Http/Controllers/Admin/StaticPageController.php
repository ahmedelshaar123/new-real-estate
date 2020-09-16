<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StaticPageRequest;
use App\Models\StaticPage;

class StaticPageController extends Controller
{
    public function index(){
        $staticPages = StaticPage::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $name = 'name_' . $lang;
        $value = 'value_' . $lang;
        return view('admin.static pages.index_edit', compact('staticPages', 'name', 'value'));
    }

    public function update(StaticPageRequest $request)
    {
        $staticPages = StaticPage::all();
        if ($request->hasFile('vision_image')) {
            makeImage($request->file('vision_image'), 'uploads/static pages', $staticPages->where('key', 'vision_image')->first());
        }
        if ($request->hasFile('message_image')) {
            makeImage($request->file('message_image'), 'uploads/static pages', $staticPages->where('key', 'message_image')->first());
        }
        if ($request->hasFile('desc_image')) {
            makeImage($request->file('desc_image'), 'uploads/static pages', $staticPages->where('key', 'desc_image')->first());
        }
        $lang = \LaravelLocalization::getCurrentLocale();
        $val = 'value_' . $lang;
        $requestData = $request->all();

        foreach($requestData as $key=>$value)
        {
            foreach ($staticPages as $staticPage) {
                if($staticPage->type != 'image') {
                    $staticPage->where('key', $key)->update([$val => $value]);
                }
            }
        }

        session()->flash('key', trans('admin.edited'));
        return back();
    }
}
