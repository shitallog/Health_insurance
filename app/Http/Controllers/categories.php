<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class categories extends Controller
{



    public function index()
    {
        $categories = Category::with('parentCategory')->get();
        return view('categories.index', compact('categories'));
    }


    // Display the edit form for a specific category
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '!=', $id)->get(); // Get all categories except the one being edited
        return view('categories.edit', compact('category', 'categories'));
    }

    // Update a specific category in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->only(['name', 'parent_id']));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }



    // Display the create form for a new category
    public function create()
    {
        $categories = Category::all(); // Get all categories for the parent category dropdown
        return view('categories.create', compact('categories'));
    }
   // Store a new category in storage
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'parent_id' => 'nullable|exists:categories,id',
       ]);

       Category::create($request->only(['name', 'parent_id']));

       return redirect()->route('categories.index')->with('success', 'Category created successfully.');
   }


    // Destroy a specific category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        
        // Check if the category has subcategories
        if ($category->subcategories()->count() > 0) {
            return redirect()->route('categories.index')->with('error', 'Cannot delete category with subcategories.');
        }
        
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
