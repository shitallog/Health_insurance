<?php
namespace App\Mail;

namespace App\Http\Controllers;
use App\Models\InsuranceProduct;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactMail;
use Illuminate\Mail\Mailable;

use App\Models\InsuranceCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // Assuming you want to pass insurance categories to the view
        $insuranceCategories =InsuranceCategory::all();
        return view('frontend.index', compact('insuranceCategories'));  // Pass data to the view
    }
    
    public function show($productId)
    {
        // Find the insurance product by its ID or fail if not found
        $product = InsuranceProduct::findOrFail($productId);
    
        // Return the view and pass the product data
        return view('frontend.product', compact('product'));
    }




 public function about()
 {
     return view('frontend.about');
 }

 public function contact()
 {
     return view('frontend.contact');
 }


 public function Proposer()
 {
    $products = InsuranceProduct::all();
     return view('frontend.Proposer', compact('products'));
 }

 public function product()
 {
     // Fetch all insurance products and categories
     $products = InsuranceProduct::all();
     $insuranceCategories = InsuranceCategory::all();
 
     // Return the view with the products and categories data
     return view('frontend.product', compact('products', 'insuranceCategories'));
 }
 

   
public function send(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Prepare the data for the email
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ];

    // Send the email (you can use a Mailable class for better organization)
    Mail::to('info@monarchinstitute.in')->send(new ContactMail($data));

    // Flash a success message to the session
    return back()->with('success', 'Your message has been sent successfully!');
}




}
