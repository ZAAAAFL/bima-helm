<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Produk";

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = $category->name;
        }

        return view('pages.products', [
            "title" => $title,
            "categories" => Category::all(),
            "products" => Product::filter(request(['search', 'category']))->paginate(10)->withQueryString(),
        ]);
    }

    public function detail(Product $product)
    {
        return view('pages.product-detail', [
            "title" => "$product->name",
            "product" => $product
        ]);
    }

}
