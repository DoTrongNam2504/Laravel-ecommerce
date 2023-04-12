<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryAdmin;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use LDAP\Result;

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
            $destination_path = 'upload/category'; 
            $image = $request->file('image'); 
            $image_name = $image->getClientOriginalName(); 
            $image->move($destination_path, $image_name);
            $categoryAdmin->image = $image_name;

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

    public function edit($id)
    {
        $categoryAdmin = CategoryAdmin::find($id); 
        return view('admin.category.update', compact('categoryAdmin'));
    }

     public function update(Request $request, $id)
    {
        $categoryAdmin = CategoryAdmin::find($id);
       
        if($request->hasFile('image'))
        {
            $destination_path = 'upload/category'; 
            $image = $request->file('image'); 
            $image_name = $image->getClientOriginalName(); 
            $image->move($destination_path, $image_name);
            $categoryAdmin->image = $image_name;

        }
        $categoryAdmin->name = $request->input('name');
        $categoryAdmin->slug = $request->input('slug');
        $categoryAdmin->description = $request->input('description');
        $categoryAdmin->status = $request->input('status') == TRUE ? '1' : '0';
        $categoryAdmin->popular = $request->input('popular') == TRUE ? '1' : '0';
        $categoryAdmin->meta_title = $request->input('meta_title');
        $categoryAdmin->meta_description = $request->input('meta_description');
        $categoryAdmin->meta_keywords = $request->input('meta_keywords');
        $categoryAdmin ->update(); 
        return redirect('/categories')->with('status', "Category update successfully");
    }

    public function delete($id)
    {
        $categoryAdmin = CategoryAdmin::find($id); 
        $categoryAdmin->delete(); 
        return redirect('/categories')->with('status', "Category is deleted");
    }
}
