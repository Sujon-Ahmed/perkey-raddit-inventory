<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Stock;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $stocks = Stock::orderBy('created_at','DESC')->get();

        // $products = Product::all();
        return view('backend.stock.index', compact('stocks','user'));
    }
    public function create(){
        $user = Auth::user();
        $stocks = Stock::orderBy('created_at','DESC')->get();
        $categories = ProductCategory::where('status',1)->get();
        // $products = Product::all();
        return view('backend.stock.create', compact('stocks','user','categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'price' => 'required'
        ]);

        try{
            Product::create([
                'name' => $request->name,
                'category_id' => $request->cat_id,
                'price' => $request->price
            ]);

            return back()->with('success', 'Product has been Inserted');
        }catch(Exception $e){
            return back()->with('error', 'Product Not Inserted');
        }
    }

    public function delete($id){
        $row = Product::findOrFail(decrypt($id));
        $row->delete();
        return back()->with('success', 'Product has been Deleted');
    }

    // get category product
    public function getCategoryProduct(Request $request)
    {
        $str_to_send = '<option value="" class="form-control">-- Select Category --</option>';
        foreach (Product::where('category_id', $request->id)->get() as $product) {
            $str_to_send .= '<option value="' . $product->id . '">' . $product->name . '</option>';
        }
        echo $str_to_send;
    }
}
