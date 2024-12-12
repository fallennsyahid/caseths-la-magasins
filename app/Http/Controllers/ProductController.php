<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showCasing()
    {
        // Mengambil data produk berdasarkan kategori 'casing'
        $products = Product::where('category', 'casing')->paginate(6);

        // Mengirim data produk ke view 'products.casing'
        return view('products.casing', compact('products'));
    }

    public function showPhoneStrap()
    {
        //produk berdasarkan kategori
        $products = Product::where('category', 'phonestrap')->paginate(6);
        //View dengan data produk
        return view('products.phoneStrap', compact('products'));
    }

    public function showBoquette()
    {
        //produk berdasarkan kategori
        $products = Product::where('category', 'bouquet')->get();

        //View dengan data produk
        return view('products.boquette', compact('products'));
    }
}
