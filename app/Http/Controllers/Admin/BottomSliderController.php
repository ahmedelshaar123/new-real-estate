<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BottomSliderRequest;
use App\Models\BottomSlider;
use Mcamara\LaravelLocalization\LaravelLocalization;

class BottomSliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bot_sliders = BottomSlider::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $desc = 'desc_'.$lang;
        return view('admin.bottom sliders.index', compact('bot_sliders', 'desc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.bottom sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BottomSliderRequest $request
     * @return void
     */
    public function store(BottomSliderRequest $request)
    {
        $bot_slider = BottomSlider::create($request->all());
        makeImage($request->file('image'), 'uploads/bottom sliders', $bot_slider);
        return redirect(route('bottom-sliders.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $bot_slider = BottomSlider::findOrFail($id);
        return view('admin.bottom sliders.edit', compact('bot_slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param BottomSliderRequest $request
     * @param int $id
     * @return void
     */
    public function update(BottomSliderRequest $request, $id)
    {
        $bot_slider = BottomSlider::find($id);
        $bot_slider->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/bottom sliders', $bot_slider);

        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('bottom-sliders.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $bot_slider = BottomSlider::findOrFail($id);
        unlink($bot_slider->photo->path);
        $bot_slider->photo()->delete();
        $bot_slider->delete();
        return response()->json('delete');

    }

}


