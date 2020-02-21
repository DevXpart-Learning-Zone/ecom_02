<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
// wifi@2019
use Session;


class CategoryController extends Controller
{

    public function index()
    {
       $data = [
            'categories' => Category::orderBy('name')->get()
       ];
       return view('admin.category.index')->with($data);
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $data['name'] = $request->name;
        if(Category::create($data))
        {
            Session::flash('success','Data inserted successfully');
            return redirect()->route('admin.category.index');
        }else{
            Session::flash('success','Data insert failed');
            return redirect()->route('admin.category.create');
        }
    }

    public function edit(Category $category)
    {
        $data = [
            'category' =>  $category
       ];
        return view('admin.category.edit')->with($data);
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        if($category->update())
        {
            Session::flash('success','Data updated successfully');
            return redirect()->route('admin.category.index');
        }else{
            Session::flash('success','Data updated failed');
            return redirect()->route('admin.category.index');
        }
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category->delete())
        {
            Session::flash('success','Data deleted successfully');
            return redirect()->route('admin.category.index');
        }else{
            Session::flash('success','Data delete failed');
            return redirect()->route('admin.category.index');
        }
    }
}
