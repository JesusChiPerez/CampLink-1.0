<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return 'This is the form to create a products';
    }
    public function store()
    {
        //
    }

    public function show($product)
    {
        return view('products.show')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
