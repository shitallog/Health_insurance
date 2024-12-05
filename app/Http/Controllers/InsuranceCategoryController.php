<?php

namespace App\Http\Controllers;
use App\Models\InsuranceCategory;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class InsuranceCategoryController extends Controller
{
    public function index()
    {
        $categories = InsuranceCategory::all();
        return view('health.insurance_categories.index', compact('categories'));
    }

 // Show form to create a new category
 public function create()
 {
     return view('health.insurance_categories.create');
 }

 // Store a new category
 public function store(Request $request)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'description' => 'nullable|string',
         'discount' => 'required|numeric|min:0|max:10',
         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
     ]);
 
     $imagePath = null;
 
     // Check if an image is uploaded
     if ($image = $request->file('image')) {
         $destinationPath = 'image/';
         // Generate a unique filename based on current timestamp
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         // Move the image to the destination path and set $imagePath to the filename
         $image->move($destinationPath, $profileImage);
         // Set the $imagePath to the location of the uploaded file
         $imagePath = $destinationPath . $profileImage;
     }
 
     // Save the category with the image path
     InsuranceCategory::create([
         'name' => $request->name,
         'description' => $request->description,
         'discount' => $request->discount,
         'image' => $imagePath,
     ]);
 
     return redirect()->route('health.insurance_categories.index')->with('success', 'Category created successfully.');
 }
 



 // Show form to edit an existing category
 public function edit($id)
 {
     $category = InsuranceCategory::findOrFail($id);
     return view('health.insurance_categories.edit', compact('category'));
 }

 // Update an existing category
 public function update(Request $request, $id)
 {
     $request->validate([
         'name' => 'required|string|max:255',
         'description' => 'nullable|string',
         'discount' => 'required|numeric|min:0|max:10',
         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
     ]);

     $category = InsuranceCategory::findOrFail($id);

     // Handle image upload if present
     if ($request->hasFile('image')) {
         // Optionally delete old image here if needed
         $imagePath = $request->file('image')->store('images', 'public');
     } else {
         $imagePath = $category->image; // Keep the existing image
     }

     // Update category
     $category->update([
         'name' => $request->name,
         'description' => $request->description,
         'discount' => $request->discount,
         'image' => $imagePath,
     ]);

     return redirect()->route('health.insurance_categories.index')->with('success', 'Category updated successfully.');
 }

 // Delete a category
 public function destroy($id)
 {
     $category = InsuranceCategory::findOrFail($id);
     $category->delete();

     return redirect()->route('health.insurance_categories.index')->with('success', 'Category deleted successfully.');
 }








}
