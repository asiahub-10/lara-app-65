<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::where('user_id', auth()->user()->id)->get();
        return view('admin.pages.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('image'));
        foreach ($request->file('image') as $image) {
            // dd($image);
            $image_path = $image->store('gallery', 'public');
            Gallery::create([
                'image' => $image_path,
                'user_id' => auth()->user()->id
            ]);
        }
        // return redirect('/gallery/create')->with('success', 'Image(s) uploaded successfully!');
        return redirect()->route('gallery.create')->with('success', 'Image(s) uploaded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete image from storage
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        // Delete database record
        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery deleted successfully.');
    }
}
