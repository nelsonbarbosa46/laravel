<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $product = "apple";

        $products = [
            'p1' => "orange",
            'p2' => 'pear',
        ];
        // Usando "compact"
        // return view('products.index', compact('product'));
        
        //Usando "With"
        // return view('products.index')->with('product', $product));
        // return view('products.index')->with('products', $products);

        //Inserindo diretamente
        return view('products.index', [
            'products' => $products
        ]);
    }
}
