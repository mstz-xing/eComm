<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{
    function index()
    {
        $featured_products = Product::where('trending','1')->take(4)->get();
        $trending_category = Category::where('popular','1')->take(4)->get();
        // $featured_prodcuts= Product::where('trending','1')->get();
        return view('frontend.index',compact('featured_products','trending_category'));
    }

    function category()
    {
        $category = Category::where('status','0')->get();
        return view('frontend.category',compact('category'));



    }

    function viewcategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
           $category = Category::where('slug',$slug)->first();
           $products = Product::where('cate_id',$category->id)->where('status','0')->get();
           return view('frontend.products.index',compact('category','products'));

        }
        else{
            return redirect('/')->with('status',"Slug does not exists");
        }
    }

    function productview($cate_slug,$prod_slug)
    {
        if(Category::where('slug',$cate_slug)->exists())
        {
            if(Product::where('slug',$prod_slug)->exists())
            {
                 $products = Product::where('slug',$prod_slug)->first();
                 return view('frontend.products.view',compact('products'));
            }
            else{
                return redirect('/')->with('status',"This link was broken");

            }
        }

        else{
            return redirect('/')->with('status',"No such category found");
            
        }

    }

}
