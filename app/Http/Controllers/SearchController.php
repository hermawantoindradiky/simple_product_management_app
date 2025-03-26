<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $products = Product::where('name', 'like', "%$keyword%")
                            ->paginate(1)
                            ->appends(['keyword' => $keyword]);

        return view('products.search', compact('products', 'keyword'));
    }
}
