<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'product' => 'sometimes|required',
            'price' => 'sometimes|required',
            'picture' => 'sometimes|required',
            'link' => 'sometimes|required',
            'weight' => 'sometimes|required',
            'category' => 'sometimes|required',
        ]);

        if ($request->hasFile('picture')) {
            $pictureName = $request->file('picture')->store('products', 'public');
        } else {
            $pictureName = null;
        }

        Product::create([
            'product' => $request->product,
            'price' => $request->price,
            'picture' => $pictureName,
            'link' => $request->link,
            'weight' => $request->weight,
            'category' => $request->category,
        ]);

        return redirect()->route('product.index')->with('success', 'Data created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product' => 'string',
            'price' => 'numeric',
            'weight' => 'numeric',
            'category' => 'string',
            'link' => 'string',
            'picture' => 'nullable|image',
        ]);

        $data = $request->only('product', 'price', 'category', 'weight', 'link');

        if ($request->hasFile('picture')) {
            if (!empty($product->picture)) {
                Storage::disk('public')->delete($product->picture);
            }

            $pictureName = $request->file('picture')->store('products', 'public');
            $data['picture'] = $pictureName;
        }
        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->picture);
        $product->delete();

        return redirect()->route('product.edit')->with('success', 'Data deleted successfully');
    }

    public function destroyAll()
    {
        Product::truncate();

        return redirect()->route('product.index')->with('success', 'All data deleted successfully');
    }

    // Export Excel
    public function export()
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
