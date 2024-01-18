<?php

// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Content;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'content' => 'required|string',
        'heading1' => 'nullable|string|max:255',
        'heading2' => 'nullable|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();

    // Create a new page instance
    $page = new Page([
        'content' => $request->input('content'),
        'heading1' => $request->input('heading1'),
        'heading2' => $request->input('heading2'),
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('page_images', 'public');
        // Set the image attribute directly
        $page->image = $imagePath;
    }

    // Save the page
    $user->pages()->save($page);

    return redirect()->route('home', $page->id)->with('success', 'Page created successfully!');
}


    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }


// Your controller method
public function updateContent(Request $request)
{
    $content = Content::first(); // Assuming you want to update the first instance

    // Validate the request data
    $request->validate([
        'heading1' => 'required|string',
        'heading2' => 'required|string',
        'content' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update the content
    $content->update([
        'heading1' => $request->input('heading1'),
        'heading2' => $request->input('heading2'),
        'content' => $request->input('content'),
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('page_images', 'public');
        // Set the image attribute directly
        $content->image = $imagePath;
        $content->save(); // Save the model after setting the image
    }

    return redirect()->route('home')->with('success', 'Content updated successfully!');
}



}

