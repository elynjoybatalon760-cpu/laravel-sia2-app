<?php

namespace App\Http\Controllers;

use App\Models\Product; // Importa ang Model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Dinhi nimo tawgon ang data gikan sa database
        $products = Product::all(); 

        // I-pasa ang data ngadto sa imong view (index.blade.php)
        return view('products.index', compact('products'));
    }
}