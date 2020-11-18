<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;


class PartnerController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $partners = Partner::all();
      return view('admin.partners.index', compact('partners'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('admin.partners.create');

  }

    /**
     * Store a newly created resource in storage.
     *
     * @param PartnerRequest $request
     * @return void
     */
  public function store(PartnerRequest $request)
  {
      $partner = Partner::create($request->all());
      makeImage($request->file('image'), 'uploads/partners', $partner);
      return redirect(route('partners.index'));

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
      $partner = Partner::findOrFail($id);
      return view('admin.partners.edit', compact('partner'));

  }

    /**
     * Update the specified resource in storage.
     *
     * @param PartnerRequest $request
     * @param int $id
     * @return void
     */
  public function update(PartnerRequest $request, $id)
  {
      $partner=Partner::find($id);
      $partner->update($request->all());
      if ($request->hasFile('image')) {
          makeImage($request->file('image'), 'uploads/partners', $partner);
      }
      session()->flash('key', trans('admin.edited'));
      return redirect(route('partners.index'));

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $partner = Partner::findOrFail($id);
      unlink($partner->photo->path);
      $partner->photo()->delete();
      $partner->delete();
      return response()->json('delete');


  }

}


