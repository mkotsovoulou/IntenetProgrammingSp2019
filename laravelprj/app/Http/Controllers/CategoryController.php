<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   public function addCategory(Request $request) {
       if ($request->isMethod('post')) {
           $data = $request->all();
           $category = new Category;
           $category->name = $data['categoryName'];
           $category->description = $data['description'];
           $category->url = $data['url'];
		   $category->save();
           return redirect()->back()->with('flash_message_success', 'Category has been added successfully');
         }
       return view('admin.categories.addCategory');

   }
}
