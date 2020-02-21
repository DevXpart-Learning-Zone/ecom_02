<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Session;

class BrandController extends Controller
{
    public function index()
    {
       $data = [
            'brands' => Brand::orderBy('name')->get()
       ];
       return view('admin.brand.index')->with($data);
    }


    public function create()
    {
        return view('admin.brand.create');
    }


    public function store(Request $request)
    {
        $data['name'] = $request->name;
        if(Brand::create($data))
        {
            Session::flash('success','Data inserted successfully');
            return redirect()->route('admin.brand.index');
        }else{
            Session::flash('success','Data insert failed');
            return redirect()->route('admin.brand.create');
        }
    }

    public function edit(Brand $brand)
    {
        $data = [
            'brand' =>  $brand
       ];
        return view('admin.brand.edit')->with($data);
    }

    public function update(Request $request, Brand $brand)
    {
        $brand->name = $request->name;
        if($brand->update())
        {
            Session::flash('success','Data updated successfully');
            return redirect()->route('admin.brand.index');
        }else{
            Session::flash('success','Data updated failed');
            return redirect()->route('admin.brand.index');
        }
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        if($brand->delete())
        {
            Session::flash('success','Data deleted successfully');
            return redirect()->route('admin.brand.index');
        }else{
            Session::flash('success','Data delete failed');
            return redirect()->route('admin.brand.index');
        }
    }
}
