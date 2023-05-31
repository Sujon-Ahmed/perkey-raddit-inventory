<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $products = Product::orderBy('created_at', 'DESC')->get();
        $categories = ProductCategory::where('status', 1)->get();
        return view('backend.product.index', compact('products', 'user', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:products',
            'price' => 'required'
        ]);

        try {
            Product::create([
                'name' => $request->name,
                'category_id' => $request->cat_id,
                'price' => $request->price
            ]);

            return back()->with('success', 'Product has been Inserted');
        } catch (Exception $e) {
            return back()->with('error', 'Product Not Inserted');
        }
    }

    public function delete($id)
    {
        $row = Product::findOrFail(decrypt($id));
        $row->delete();
        return back()->with('success', 'Product has been Deleted');
    }
}
