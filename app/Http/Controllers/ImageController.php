<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Page;
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
        return view('images.edit')->withItem($image)
            ->withPages(Page::all())
            ->withPosts(Post::all());
    }

    public function update(Request $request, Image $image)
    {
        list($type,$id) = explode('|',$request->imageable);
        $type = 'App\\Models\\'.$type;
        $imageable = (new $type)::find($id);

        # one2one: from post [OK]
//        $post->image()->save($image);

        # morph: from imageable [OK]
//        $imageable->image()->save($image);

        # one2one: from image [OK]
//        $image->post()->associate($post);

        # morph: from imageable [OK] needs save
        $image->imageable()->associate($imageable);
        $image->save();


//        $image->update($request->all());
        return redirect()->route('images.index');
    }

    public function destroy(Image $image)
    {
        //
    }
}
