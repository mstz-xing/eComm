<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\FILE;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }

    function add()
    {
        return view('admin.category.add');
    }

    function insert(Request $req)
    {
        $category = new Category();
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;

        }
        $category->name = $req->input('name');
        $category->slug = $req->input('slug');
        $category->description = $req->input('description');
        $category->status = $req->input('status') == TRUE?'1':'0';
        $category->popular = $req->input('popular') == TRUE?'1':'0';
        $category->meta_title = $req->input('meta-title');
        $category->meta_keywords = $req->input('meta-keywords');
        $category->meta_descrip = $req->input('meta-description');
        $category->save();
        return redirect('/dashboard')->with('status','Category Added Successfully');



    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    
    public function update(Request $req,$id)
    {
        $category = Category::find($id);
        if($req->hasFile('image'))
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);


            }
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }

        $category->name = $req->input('name');
        $category->slug = $req->input('slug');
        $category->description = $req->input('description');
        $category->status = $req->input('status') == TRUE?'1':'0';
        $category->popular = $req->input('popular') == TRUE?'1':'0';
        $category->meta_title = $req->input('meta-title');
        $category->meta_keywords = $req->input('meta-keywords');
        $category->meta_descrip = $req->input('meta-description');
        $category->update();
        return redirect('/dashboard')->with('status','Category Updated Successfully');

    }

    function destroy($id)
    {

        $category = Category::find($id);
        if($category->image)
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
             }
        }
     $category->delete();
     return redirect('categories')->with('status','Category deleted successfuly');
    }
}






