<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index')->withItems(Image::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Image $image)
    {
        //
    }

    public function edit(Image $image)
    {
        return view('images.edit')->withItem($image)->withPosts(Post::all());
    }

    public function update(Request $request, Image $image)
    {
        $post = Post::find($request->post);

        # from post [OK]
//        $post->image()->save($image);

        # from image [OK]
        $image->post()->associate($post);


        $image->update($request->all());
        return redirect()->route('images.index');
    }

    public function destroy(Image $image)
    {
        //
    }
}
