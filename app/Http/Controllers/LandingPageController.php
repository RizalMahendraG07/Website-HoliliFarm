<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Informasi;
class LandingPageController extends Controller
{

public function index()
{
    $products = Product::paginate(3)->appends(request()->query())->fragment('produk');

    $articles = Informasi::paginate(3);

    return view('landing', compact('products','articles'));
}

}
