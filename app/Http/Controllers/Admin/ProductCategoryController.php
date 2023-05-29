<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Exception;

class ProductCategoryController extends Controller
{
    // index view product category
    public function index()
    {
        $user = Auth::user();
        $categories = ProductCategory::orderBy('created_at', 'desc')->get();
        return view('backend.product-category.index', compact('user','categories'));
    }

    // store product category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:product_categories|max:255'
        ], [
            'name.required' => 'Please Enter Category Name'
        ]);

        try {

            ProductCategory::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'created_at' => Carbon::now()
            ]);
            return back()->with('success', 'Product Category has been Inserted');
        } catch (Exception $e) {
            return back()->with('error', 'Product Category not Inserted!');
        }
    }
}
