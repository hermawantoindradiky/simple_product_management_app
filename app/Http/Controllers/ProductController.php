<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // $products = Product::all();
        $products = Product::paginate(3);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        // Melakukan validasi input
        $request->validate([
            'name'  => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        // Mengambil data input
        $data = $request->all();

        // Melakukan upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = 'uploads/' . $imageName; 
        }

        // Menambah produk
        Product::create($data);

        // Mengalihkan ke halaman produk
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Melakukan validasi input
        $request->validate([
            'name'  => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        // Mengambil data input
        $data = $request->all();

        // Melakukan upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = 'uploads/' . $imageName; 
        }

        // Memperbarui produk
        $product->update($data);

        // Mengalihkan ke halaman produk
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Hapus gambar jika ada
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        // Menghapus produk
        $product->delete();

        // Mengalihkan ke halaman produk
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
