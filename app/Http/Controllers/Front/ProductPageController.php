<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

//MODELs
use App\Http\Controllers\Back\ProductController;
use App\Models\Publisher;
use App\Models\Kind;

class ProductPageController extends Controller
{
    public function pcPageIndex(){

        $pcPublishers = Publisher::where('isDeleted', 0)->where('pcProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isKediKumu', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isKediKumu', 1)->orderByDesc('id')->get();

        return view('front.kedimamasi', compact('pcPublishers', 'kinds', 'products'));
    }

    public function psPageIndex(){
        $psPublishers = Publisher::where('isDeleted', 0)->where('psProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isKediMamasi', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isKediMamasi', 1)->orderByDesc('id')->get();

        return view('front.kedikumu', compact('psPublishers', 'kinds', 'products'));
    }

    public function xboxPageIndex(){

        $xboxPublishers = Publisher::where('isDeleted', 0)->where('xboxProductCount', '>', 0)->get();
        $kindIds = Product::where('isDeleted', 0)->where('isKediEsya', 1)->distinct()->pluck('kindId')->toArray();
        $kinds = Kind::where('isDeleted', 0)->whereIn('id', $kindIds)->get();

        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->where('isKediEsya', 1)->orderByDesc('id')->get();

        return view('front.kediesyalari', compact('xboxPublishers', 'kinds', 'products'));
    }

    public function details()
    {
        $products = Product::where('isDeleted', 0)->where('stock', '>', 0)->orderByDesc('id')->get();
        return view('front.gta', compact('products'));
    }

    public function xboxDetails($id)
    {
        $product = Product::find($id);

        $pro = Product::where('isDeleted', 0)->where('stock', '>', 0)->orderByDesc('id')->paginate(4);

        return view('front.productDetail', compact('product','pro'));
    }
}
