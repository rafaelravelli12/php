<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producttype;
use App\Models\Establishments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'globaladmin') {
            $products = Product::with('productType')->orderBy('id', 'desc')->paginate(10);
        }

        return view("products.index", compact("products"));
    }

    public function create()
    {
        $product = new Product();

        return view('products.create', compact('product'));
    }

    public function store(Request $request)
    {
        try {
            // request validation
            $validatedData = $request->validate([
                'name' => 'required|string',
                'product_type_id' => 'required|integer|between:1,5'
            ]);
    
            // business rule
            Product::create([
                'name' => $validatedData['name'],
                'product_type_id' => $validatedData['product_type_id']
            ]);
            return redirect('/products')->with('success', 'Product added successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('danger', 'Incorrect parameters. Product_type_id must be between 1 and 5.');                             
        }
    }

    public function view(string $id)
    {
        $products = Product::findOrFail($id);
        return view('products.view', compact('products'));
    }

    public function edit(string $id)
    {
        $products = Product::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, string $id)
    {
        try {
            // request validation
            $validatedData = $request->validate([
                'name' => 'required|string',
                'product_type_id' => 'required|integer|between:1,5'
            ]);
    
            // business rule
            $products = Product::findOrFail($id);
            $products->update($validatedData);

            return redirect('/products')->with('success', 'Product updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->with('danger', 'Incorrect parameters. Product_type_id must be between 1 and 5.');                             
        }
    }

    public function deleteView(string $id)
    {
        $products = Product::findOrFail($id);
        return view('products.delete', compact('products'));
    }

    public function destroy(string $id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect('/products')->with('success', 'Product deleted successfully.');
    }
}
