<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function subCategoryView(){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategory = SubCategory::latest()->get();
        return view('backend.category.subcategory-view',compact('subcategory','categories'));
    }

    public function subCategoryStore(Request $request){
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_ind' => 'required',
        ],[
            'category_id.required' => 'Please select Any option',
            'subcategory_name_en.required' => 'Input SubCategory English Name',
        ]);
        
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ind' => $request->subcategory_name_ind,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_ind' => str_replace(' ', '-',$request->subcategory_name_ind),
        ]);

        $notification = array(
			'message' => 'SubCategory Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    } // end method 


    public function subCategoryEdit($id){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.category.subcategory-edit',compact('subcategory','categories'));
    }


    public function subCategoryUpdate(Request $request){
        $subcat_id = $request->id;

        SubCategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ind' => $request->subcategory_name_ind,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_ind' => str_replace(' ', '-',$request->subcategory_name_ind),
        ]);

        $notification = array(
			'message' => 'SubCategory Updated Successfully',
			'alert-type' => 'info'
		);
		return redirect()->route('all.subcategory')->with($notification);
    }  // end method

    public function subCategoryDelete($id){
        SubCategory::findOrFail($id)->delete();
        
        $notification = array(
			'message' => 'SubCategory Deleted Successfully',
			'alert-type' => 'info'
		);
		return redirect()->back()->with($notification);
    }
}
