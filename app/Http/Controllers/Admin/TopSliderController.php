<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TopSliderRequest;
use App\Models\TopSlider;

class TopSliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $top_sliders = TopSlider::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = 'title_'.$lang;
        $desc = 'desc_'.$lang;
        return view('admin.top sliders.index', compact('top_sliders', 'desc', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.top sliders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TopSliderRequest $request
     * @return void
     */
    public function store(TopSliderRequest $request)
    {
        $top_slider = TopSlider::create($request->all());
        makeImage($request->file('image'), 'uploads/top sliders', $top_slider);
        return redirect(route('top-sliders.index'));

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
        $top_slider = TopSlider::findOrFail($id);
        return view('admin.top sliders.edit', compact('top_slider'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param TopSliderRequest $request
     * @param int $id
     * @return void
     */
    public function update(TopSliderRequest $request, $id)
    {
        $top_slider = TopSlider::find($id);
        $top_slider->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/top sliders', $top_slider);

        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('top-sliders.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $top_slider = TopSlider::findOrFail($id);
        unlink($top_slider->photo->path);
        $top_slider->photo()->delete();
        $top_slider->delete();
        return response()->json('delete');

    }

}


