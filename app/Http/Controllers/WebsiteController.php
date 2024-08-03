<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $products = Website::take(150)->get();

// Retrieve all products in chunks and aggregate them into a single collection
// DB::table('products')->orderBy('id','desc')->chunk(100, function (Collection $chunk) use (&$products) {
//     $products = $products->concat($chunk);
// });

// Now you can pass the aggregated collection to the view
return view('website.index', compact('products'));
    }

    public function productDetail($id,$name) {
        return view('website.products.detail');
    }
}
