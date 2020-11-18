<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeaturedEstateRequest;
use App\Models\FeaturedEstate;

class FeaturedEstateController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $feat_estates = FeaturedEstate::all();
      $lang = \LaravelLocalization::getCurrentLocale();
      $title = 'title_'.$lang;
      $address = 'address_'.$lang;
      return view('admin.featured estates.index', compact('feat_estates', 'title', 'address'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      return view('admin.featured estates.create');
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param FeaturedEstateRequest $request
     * @return void
     */
  public function store(FeaturedEstateRequest $request)
  {
      $feat_estate = FeaturedEstate::create($request->all());

      foreach($request->file('image') as $file){
          $path = public_path();
          $destinationPath = $path . '/uploads/featured estates';
          $image = $file;
          $extension = $image->getClientOriginalExtension();
          $name = time() . '' . rand(11111, 99999) . '.' . $extension;
          $image->move($destinationPath, $name);
          $feat_estate->photos()->create(['path' => 'uploads/featured estates/' . $name]);
      }
      session()->flash('key', trans('admin.added'));
      return redirect(route('featured-estates.index'));

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
      $feat_estate = FeaturedEstate::findOrFail($id);
      return view('admin.featured estates.edit', compact('feat_estate'));

  }

    /**
     * Update the specified resource in storage.
     *
     * @param FeaturedEstateRequest $request
     * @param int $id
     * @return void
     */
  public function update(FeaturedEstateRequest $request, $id)
  {
      $feat_estate = FeaturedEstate::find($id);
      $feat_estate->update($request->all());
      if($request->hasFile('image')) {
          foreach ($feat_estate->photos as $photo) {
              unlink($photo->path);
//              $photo->delete();
          }
          $feat_estate->photos()->delete();

          foreach ($request->file('image') as $file) {
              $path = public_path();
              $destinationPath = $path . '/uploads/featured estates';
              $image = $file;
              $extension = $image->getClientOriginalExtension();
              $name = time() . '' . rand(11111, 99999) . '.' . $extension;
              $image->move($destinationPath, $name);
              $feat_estate->photos()->create(['path' => 'uploads/featured estates/' . $name]);
          }
      }
      session()->flash('key', trans('admin.edited'));
      return redirect(route('featured-estates.index'));

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
      $feat_estate = FeaturedEstate::findOrFail($id);
      foreach ($feat_estate->photos as $photo) {
          unlink($photo->path);
      }
      $feat_estate->photos()->delete();
      $feat_estate->delete();
      return response()->json('delete');

  }

}


