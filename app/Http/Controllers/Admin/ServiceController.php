<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $services = Service::paginate(10);
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = 'title_'.$lang;
        $desc = 'desc_'.$lang;
        return view('admin.services.index', compact('services', 'title', 'desc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return void
     */
    public function store(ServiceRequest $request)
    {
        $service = Service::create($request->all());
        $path = public_path();
        $destinationPath = $path . '/uploads/services';
        $image = $request->file('image');
        $icon = $request->file('thumbnail');
        $extensionImg = $image->getClientOriginalExtension();
        $extensionIcon = $icon->getClientOriginalExtension();
        $nameImg = time() . '' . rand(11111, 99999) . '.' . $extensionImg;
        $nameIcon = time() . '' . rand(11111, 99999) . '.' . $extensionIcon;
        $image->move($destinationPath, $nameImg);
        $icon->move($destinationPath, $nameIcon);
        $service->photo()->create(['path' => 'uploads/services/' . $nameImg, 'icon' => 'uploads/services/' . $nameIcon]);
        session()->flash('key', trans('admin.added'));
        return redirect(route('services.index'));

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
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param int $id
     * @return void
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $service->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/services', $service);
        }
        if ($request->hasFile('thumbnail')) {
            unlink($service->photo->icon);
            $path = public_path();
            $destinationPath = $path . '/uploads/services';
            $icon = $request->file('thumbnail');
            $extension = $icon->getClientOriginalExtension();
            $name = time() . '' . rand(11111, 99999) . '.' . $extension;
            $icon->move($destinationPath, $name);
            $service->photo()->update(['icon' => 'uploads/services/' . $name]);
        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('services.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if($service->posts()->count()) {
            return response()->json('not-delete');

        }
        unlink($service->photo->path);
        unlink($service->photo->icon);
        $service->photo()->delete();
        $service->delete();
        return response()->json('delete');

    }

}


