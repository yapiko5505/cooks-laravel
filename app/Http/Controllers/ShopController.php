<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //

    public function index()
    {
        $shops = Shop::all();
        return view('index', ['shops' => $shops]);
    }

    public function create()
    {
        $shop = new Shop;
        $categories = Category::all()->pluck('name', 'id');
        return view('new', ['shop' => $shop, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $shop = new Shop;
        $shop->name = request('name');
        $shop->address = request('address');
        $shop->category_id = request('category_id');
        $shop->save();
        return redirect()->route('shop.detail', ['id' => $shop->id]);
    }

    public function show($id)
    {
        $shop = Shop::find($id);
        return view('show', ['shop' => $shop]);
    }
}
