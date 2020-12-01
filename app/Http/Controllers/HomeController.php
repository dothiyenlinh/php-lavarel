<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\Product;
use App\Models\Category;
//use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        $cate_product =Category::where('category_status','1')->orderby('category_id','desc')->get();
        $all_product = Product::where('product_status','1')->orderby('product_id','desc')->limit(4)->get();
    	return view ('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }
 
    public function search(Request $request){
    	$keywords = $request->keyworks_submit;
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like', '%'.$keywords.'%')->get();

    	return view('pages.sanpham.search')->with('category',$cate_product)->with('search_product',$search_product);
    }

    public function all_customer()
    {
        $all_customer = DB::table('tbl_customers')->get();
        $manager_customer = view('admin.all_customer')->with('all_customer', $all_customer);
        return view('admin_layout')->with('admin.all_customer', $manager_customer);
    }
}
