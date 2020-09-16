<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyTeamRequest;
use App\Models\CompanyTeam;



class CompanyTeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $comp_team = CompanyTeam::paginate(10);
        $lang = \LaravelLocalization::getCurrentLocale();
        $name = 'name_'.$lang;
        $job = 'job_'.$lang;
        return view('admin.company team.index', compact('comp_team', 'name', 'job'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.company team.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyTeamRequest $request
     * @return void
     */
    public function store(CompanyTeamRequest $request)
    {
        $comp_per = CompanyTeam::create($request->all());
        makeImage($request->file('image'), 'uploads/company team', $comp_per);
        return redirect(route('company-team.index'));


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
        $comp_per = CompanyTeam::findOrFail($id);
        return view('admin.company team.edit', compact('comp_per'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyTeamRequest $request
     * @param int $id
     * @return void
     */
    public function update(CompanyTeamRequest $request, $id)
    {
        $comp_per = CompanyTeam::find($id);
        $comp_per->update($request->all());
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/company team', $comp_per);
        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('company-team.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $comp_per = CompanyTeam::findOrFail($id);
        unlink($comp_per->photo->path);
        $comp_per->photo()->delete();
        $comp_per->delete();
        return response()->json('delete');

    }

}


