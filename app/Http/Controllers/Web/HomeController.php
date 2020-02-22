<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => Category::orderBy('name')->get(),
            'new_products' => Product::with('category', 'brand')->orderBy('name')->limit(12)->get()
        ];
        return view('web.home')->with($data);
    }


    public function contact_us()
    {
        $data = [];
        return view('web.page.contact_us')->with($data);
    }


    public function abous_us()
    {
        $data = [];
        return view('web.page.about_us')->with($data);
    }


    public function faq()
    {
        $data = [];
        return view('web.page.faq')->with($data);
    }

    public function privacy_policy()
    {
        $data = [];
        return view('web.page.privacy_policy')->with($data);
    }
}