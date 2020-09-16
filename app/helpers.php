<?php

function makeImage($request, $dist, $var) {
    if(str_contains(Route::currentRouteName(), 'update')) {
        unlink($var->photo->path);
    }
    $path = public_path();
    $destinationPath = $path . '/' . $dist;
    $image = $request;
    $extension = $image->getClientOriginalExtension();
    $name = time() . '' . rand(11111, 99999) . '.' . $extension;
    $image->move($destinationPath, $name);
    if(str_contains(Route::currentRouteName(), 'store')) {
        $var->photo()->create(['path' => $dist . "/" . $name]);
        session()->flash('key', trans('admin.added'));
    }else {
        $var->photo()->update(['path' => $dist . '/' . $name]);
    }
}
