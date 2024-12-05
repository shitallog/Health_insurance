<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;
use App\Models\InsuranceCategory;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index()
    {
        // Retrieve all subcategories with their associated categories
        $subcategories = Subcategory::with('category')->get();
    
        // Return the view with subcategories data
        return view('health.insurance_subcategory.index', compact('subcategories'));
    }
    


    // Display the edit form for a specific category
    public function edit($id)
    {
        $category = Subcategory::findOrFail($id);
        $categories = Subcategory::where('id', '!=', $id)->get(); // Get all categories except the one being edited
        return view('health.insurance_subcategory.edit', compact('category', 'categories'));
    }

    // Update a specific category in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
        ]);

        $category = Subcategory::findOrFail($id);
        $category->update($request->only(['name', 'parent_id']));

        return redirect()->route('health.insurance_subcategory.index')->with('success', 'Category updated successfully.');
    }



  // Display the create form for a new category
      public function create()
{
    $categories = InsuranceCategory::all(); // Fetch all insurance categories
    $category = Subcategory::all(); // Get all categories for the parent category dropdown
    return view('health.insurance_subcategory.create', compact('categories', 'category'));
}

    
   // Store a new category in storage
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'parent_id' => 'nullable|exists:categories,id',
       ]);

       Subcategory::create($request->only(['name', 'parent_id']));

       return redirect()->route('health.insurance_subcategory.index')->with('success', 'Category created successfully.');
   }


    // Destroy a specific category
    public function destroy($id)
    {
        $category = Subcategory::findOrFail($id);
        
        // Check if the category has subcategories
        if ($category->subcategories()->count() > 0) {
            return redirect()->route('health.insurance_subcategory.index')->with('error', 'Cannot delete category with subcategories.');
        }
        
        $category->delete();
        return redirect()->route('health.insurance_subcategory.index')->with('success', 'Category deleted successfully.');
    }
}
