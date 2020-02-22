<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use Session;

class ProductController extends Controller
{

    public function index()
    {

        $data = [

            'products' => Product::with('category', 'brand')->orderBy('name')->get()
        ];
        return view('admin.product.index')->with($data);
    }

    public function create()
    {
        $data = [
            'brands' => Brand::orderBy('name')->get(),
            'categories' => Category::orderBy('name')->get()
        ];
        return view('admin.product.create')->with($data);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['thumb'] = 'default.png';
        $data['image'] = 'image.png';
        if ($files = $request->file('image')) {
            // for save original image
            $ImageUpload = Image::make($files);
            $originalPath = 'uploads/product/images/';
            $ImageUpload->save($originalPath . time() . $files->getClientOriginalName());

            // for save thumnail image
            $thumbnailPath = 'uploads/product/thumbnail/';
            $ImageUpload->resize(250, 125);
            $ImageUpload = $ImageUpload->save($thumbnailPath . time() . $files->getClientOriginalName());
            $data['thumb'] = time() . $files->getClientOriginalName();
            $data['image'] = time() . $files->getClientOriginalName();
        }

        if (Product::create($data)) {
            Session::flash('success', 'Data inserted successfully');
            return redirect()->route('admin.product.index');
        } else {
            Session::flash('success', 'Data insert failed');
            return redirect()->route('admin.product.create');
        }
    }

    public function edit(Brand $brand)
    {
        $data = [
            'brand' =>  $brand
        ];
        return view('admin.product.edit')->with($data);
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->name = $request->name;
        if ($brand->update()) {
            Session::flash('success', 'Data updated successfully');
            return redirect()->route('admin.product.index');
        } else {
            Session::flash('success', 'Data updated failed');
            return redirect()->route('admin.product.index');
        }
    }

    public function delete($id)
    {
        $brand = Product::find($id);
        if ($brand->delete()) {
            Session::flash('success', 'Data deleted successfully');
            return redirect()->route('admin.product.index');
        } else {
            Session::flash('success', 'Data delete failed');
            return redirect()->route('admin.product.index');
        }
    }
}