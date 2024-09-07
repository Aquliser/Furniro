<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::paginate(16);
        return view('shop', compact('shops'));
    }

    public function home()
    {
        $shops = Shop::paginate(16); // Example logic
        return view('home', compact('shops'));
    }
}
