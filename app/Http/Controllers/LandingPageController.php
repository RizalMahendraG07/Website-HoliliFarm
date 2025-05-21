<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Informasi;
class LandingPageController extends Controller
{

public function index()
{
    $products = Product::all();
    $articles = Informasi::all();

    return view('landing', compact('products','articles'));
}

}
