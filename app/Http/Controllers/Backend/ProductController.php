<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImg;

class ProductController extends Controller
{
    public function addProduct(){
		$categories = Category::latest()->get();
		$brands = Brand::latest()->get();
		return view('backend.product.product-add',compact('categories','brands'));
	}
}