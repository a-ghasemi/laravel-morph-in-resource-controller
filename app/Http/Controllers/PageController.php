<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index')->withItems(Page::all());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Page $page)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('pages.edit')->withItem($page);
    }

    public function update(Request $request, Page $page)
    {
        $image = $request->image;
        if($image){
            $page->image ?
                $page->image()->update(['url' => $image]):
                $page->image()->create(['url' => $image]);
        }

        $page->update($request->only('title'));
        return redirect()->route('pages.index');
    }

    public function destroy(Page $page)
    {
        //
    }
}
