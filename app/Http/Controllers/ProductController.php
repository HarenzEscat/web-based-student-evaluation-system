<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    function __construct(){
        $this->products = new Product;
    }
    function index(){
        // $products = $this->products->getProducts();
        return view('product')->with(['products'=>Product::all()]);
        //return view('product', compact('products'));
    }
    function save_products(Request $request){
        $data = [
            'ProductName' => $request->ProductName,
            'Description' => $request->Description,
            'Price' => $request->Price,
            'QuantityInStock' => $request->QuantityInStock,
        ];
        $this->products->saveProducts($data);
        return back();
    }
    function delete_products($id){
        $this->products->deleteProducts($id);
        return back();
    }
    function update_products($id){
        $products = $this->products->updateProducts($id);
        return view('update_products', compact('products'));
    }
    function save_updated_products(Request $request){
        $data = [
            'ProductName' => $request->update_product_name,
            'Description' => $request->update_description,
            'Price' => $request->update_price,
            'QuantityInStock' => $request->update_quantityinstock,
        ];
        $this->products->updatedProducts($data, $request->id);
        return redirect()->route('product');
    }
}