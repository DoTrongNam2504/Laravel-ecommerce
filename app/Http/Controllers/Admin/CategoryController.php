<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryAdmin;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categoryAdmin = CategoryAdmin::all(); 
        return view('admin.category.index', compact('categoryAdmin'));
    }

     public function add()
    {
        return view('admin.category.add');
    }
    
    public function insert(Request $request)
    {
        $categoryAdmin = new CategoryAdmin();
        if($request->hasFile('image'))
        {
            $file = $request->file('image'); 
            $ext = $file->getClientOriginalExtension(); 
            $filename= time().'.'.$ext;
            $file->move('upload/category/'.$filename); 
            $categoryAdmin->image = $filename;

        }
        $categoryAdmin->name = $request->input('name');
        $categoryAdmin->slug = $request->input('slug');
        $categoryAdmin->description = $request->input('description');
        $categoryAdmin->status = $request->input('status') == TRUE ? '1' : '0';
        $categoryAdmin->popular = $request->input('popular') == TRUE ? '1' : '0';
        $categoryAdmin->meta_title = $request->input('meta_title');
        $categoryAdmin->meta_description = $request->input('meta_description');
        $categoryAdmin->meta_keywords = $request->input('meta_keywords');
        $categoryAdmin ->save(); 
        return redirect('/categories')->with('status', "Category add successfully");

        
    }

    public function getAll()
    {
        # code...
    }

}
