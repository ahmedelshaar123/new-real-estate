<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Service;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all();
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = 'title_'.$lang;
        $desc = 'desc_'.$lang;
        return view('admin.posts.index', compact('posts', 'desc', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = 'title_'.$lang;
        $services = Service::all();
        return view('admin.posts.create', compact('services', 'title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return void
     */
    public function store(PostRequest $request)
    {
        $post = Post::create($request->all());
        $post->services()->attach($request->service_id);
        makeImage($request->file('image'), 'uploads/posts', $post);
        return redirect(route('posts.index'));

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
        $lang = \LaravelLocalization::getCurrentLocale();
        $title = 'title_'.$lang;
        $services = Service::all();
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post', 'services', 'title'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param int $id
     * @return void
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        if ($request->has('service_id')) {
            $post->services()->detach();
            $post->services()->attach($request->service_id);

        }
        if ($request->hasFile('image')) {
            makeImage($request->file('image'), 'uploads/posts', $post);

        }
        session()->flash('key', trans('admin.edited'));
        return redirect(route('posts.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        unlink($post->photo->path);
        $post->photo()->delete();
        $post->services()->detach();
        $post->delete();
        return response()->json('delete');

    }

}


