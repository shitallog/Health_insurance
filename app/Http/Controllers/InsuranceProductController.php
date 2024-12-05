<?php

namespace App\Http\Controllers;
use App\Models\InsuranceProduct;
use App\Models\InsuranceCategory;

use Illuminate\Http\Request;

class InsuranceProductController extends Controller
{
    public function index()
    {
        $products = InsuranceProduct::all();
        return view('health.insurance_products.index', compact('products'));
    }

    public function create()
    {

        $categories = InsuranceCategory::all(); // Fetch all categories
        return view('health.insurance_products.create', compact('categories')); // Pass categories to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'monthly_price' => 'required|numeric',
            'annual_price' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:insurance_categories,id',
            'product_code' => 'required|string|unique:insurance_products',
            'image' => 'nullable|image', // Ensure it's an image if uploaded
            'cover_amount' => 'required|numeric',
            'cashless_hospitals' => 'required|integer',
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
    
        // Create the insurance product with the validated request data and the image path
        InsuranceProduct::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'monthly_price' => $request->input('monthly_price'),
            'annual_price' => $request->input('annual_price'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'product_code' => $request->input('product_code'),
            'image' => $imagePath, // Store the image path in the database
            'cover_amount' => $request->input('cover_amount'),
            'cashless_hospitals' => $request->input('cashless_hospitals'),
        ]);
    
        return redirect()->route('health.insurance_products.index')->with('success', 'Product created successfully.');
    }
    
    public function edit(InsuranceProduct $insuranceProduct)
    {
        // No need to find or fail again since $insuranceProduct is already injected
        $categories = InsuranceCategory::all(); // Fetching all categories
        return view('health.insurance_products.edit', compact('insuranceProduct', 'categories'));
    }
    

    public function update(Request $request, InsuranceProduct $insuranceProduct)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'monthly_price' => 'required|numeric',
            'annual_price' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:insurance_categories,id',
            'product_code' => 'required|string|unique:insurance_products,product_code,' . $insuranceProduct->id,
            'image' => 'nullable|string',
            'cover_amount' => 'required|numeric',
            'cashless_hospitals' => 'required|integer',
        ]);

        $insuranceProduct->update($request->all());
        return redirect()->route('health.insurance_products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(InsuranceProduct $insuranceProduct)
    {
        $insuranceProduct->delete();
        return redirect()->route('health. insurance_products.index')->with('success', 'Product deleted successfully.');
    }
}
