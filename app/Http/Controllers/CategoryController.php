<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Gif\Exceptions\NotReadableException as ExceptionsNotReadableException;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Exception\NotReadableException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
        // return view('admin.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created category in the database.
     */

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        if ($category) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $loc = $file->store('public/categories');
                $category->image = str_replace('public/', '', $loc);
                $category->save();
                //image intervention start(imag resize)
                $manager = new ImageManager(new Driver());
                $image = $manager->read(Storage::path($loc));
                $image = $image->scaleDown(width: 800)->save(Storage::path($loc));
            } else {
                return redirect()->route('categories.create')->with('error', 'Image not available.');
            }

            return redirect()->route('categories.index')->with('success', 'Category saved successfully. ID is ' . $category->id);
        } else {
            return redirect()->route('categories.create')->with('error', 'Category add failed.');
        }
    }


    /**
     * Display the specified category.
     */
    public function show($id)
    {
        $category = Category::find($id);
        if ($category) {
            return view('admin.categories.show', compact('category'));
        } else {
            return redirect()->route('categories.index')->with('error', 'Category not found.');
        }
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified category in the database.
     */
    public function update(Request $request, Category $category)
    {
    // dd($categoty);
    // dd($request);
    //delete previous image form drive before update new one
    Storage::delete('public/' . $category->image);
    $category->update($request->except('_token'));
    if ($category) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $loc = $file->store('public/categories');
            $category->image = str_replace('public/', '', $loc);
            $category->save();
            $manager = new ImageManager(new Driver());
            $image = $manager->read(Storage::path($loc));
            $image = $image->scaleDown(width: 800)->save(Storage::path($loc));
        } else {
            return redirect()->route('categories.create')->with('error', 'Image not available.');
        }

        return redirect()->route('categories.index')->with('success', 'Category update successfully');
    } else {
        return redirect()->route('categories.create')->with('error', 'Category add failed.');
    }
    // return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
}

    /**view
     * Remove the specified category from the database.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            if ($category->image) {
                //image delete from drive
                Storage::delete('public/' . $category->image);
            }
            $category->delete();

//image delete from only DB fieeld
        // if ($category) {
        //     if ($category->image) {
        //         Storage::delete($category->image);
        //     }
        //     $category->delete();
        //     Redirect to the categories index page with a success message 

            return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
        } else {
            // If the category was not found, redirect with an error message
            return redirect()->route('categories.index')->with('error', 'Category not found.');
        }
    }
}
