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
        return view('backend.product-category.index', compact('user', 'categories'));
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

    // product category status update
    public function status($id)
    {
        $row = ProductCategory::findOrFail(decrypt($id));

        if ($row->status == 1) {
            $row->status = 0;
            $row->save();
        } else {
            $row->status = 1;
            $row->save();
        }
        return back()->with('success', 'Status has been updated');
    }

    // update product category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:product_categories|max:255'
        ], [
            'name.required' => 'Please Enter Category Name'
        ]);

        try {
            ProductCategory::findOrFail(decrypt($id))->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ]);
            return back()->with('success', 'Product Category has been updated');
        } catch (Exception $e) {
            return back()->with('error', 'Product Category has been updated');
        }
    }

    // delete product category
    public function delete($id)
    {
        try {
            ProductCategory::findOrFail(decrypt($id))->delete();
            return back()->with('success', 'Product Category has been Deleted');
        } catch (Exception $e) {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
}
