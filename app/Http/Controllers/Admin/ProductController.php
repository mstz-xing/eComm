<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\FILE;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    function add()
    {
        $category = Category::all();
        return view('admin.product.add',compact('category'));

    }

    function insert(Request $req)
    {
        $products = new Product();
        if($req->hasFile('image'))
        {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $products->image = $filename;

        }
        $products->cate_id = $req->input('cate_id');
        $products->name = $req->input('name');
        $products->slug = $req->input('slug');
        $products->small_description = $req->input('small_descript');
        $products->description = $req->input('description');
        $products->original_price = $req->input('original_price');
        $products->selling_price = $req->input('sale_price');
        $products->qty = $req->input('qty');
        $products->tax = $req->input('tax');


        $products->status = $req->input('status') == TRUE?'1':'0';
        $products->trending = $req->input('trending') == TRUE?'1':'0';
        $products->meta_title = $req->input('meta-title');
        $products->meta_keywords = $req->input('meta-keywords');
        $products->meta_description = $req->input('meta-description');
        $products->save();
        return redirect('/products')->with('status','Products Added Successfully');


    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit',compact('products'));
    }

    public function update(Request $req,$id)
    {
        $products= Product::find($id);
        if($req->hasFile('image'))
        {
            $path = 'assets/uploads/product/'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);


            }
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/product/',$filename);
            $products->image = $filename;

        }
       
        $products->name = $req->input('name');
        $products->slug = $req->input('slug');
        $products->small_description = $req->input('small_description');
        $products->description = $req->input('description');
        $products->original_price = $req->input('original_price');
        $products->selling_price = $req->input('sale_price');
        $products->qty = $req->input('qty');
        $products->tax = $req->input('tax');


        $products->status = $req->input('status') == TRUE?'1':'0';
        $products->trending = $req->input('trending') == TRUE?'1':'0';
        $products->meta_title = $req->input('meta-title');
        $products->meta_keywords = $req->input('meta-keywords');
        $products->meta_description = $req->input('meta-description');
        $products->update();
        return redirect('/products')->with('status','Products Updated Successfully');

    }

    function destroy($id)
    {

        $products = Product::find($id);
        if($products->image)
        {
            $path = 'assets/uploads/product/'.$products->image;
            if(File::exists($path))
            {
                File::delete($path);
             }
        }
     $products->delete();
     return redirect('products')->with('status','Product deleted successfuly');
    }
}
