<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class OutletController extends Controller
{
     
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index',compact('categories'));
        
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category= new Category();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset/upload/category',$filename);
            $category->image=$filename;

        }

        $category->name=$request->input('name');
        
        $category->phone=$request->input('phone');
        $category->latitude=$request->input('latitude');
        $category->longitude=$request->input('longitude');
        
        
        $category->save();
        
    }

     public function listOutlets()
    {
        $category = Category::get();
        return response()->json([
            "status" => 1,
            "message" => "Listing Outlet",
            "data" => $category,
        ], 200);

    }

    public function edit($id)
    {
        $categories=Category::find($id);
         return view('admin.category.edit',compact('categories'));
    }

    public function update(Request $request,$id)
    {
        $categories=Category::find($id);
        if($request->hasFile('image')){
        $path='asset/upload/category/'.$categories->image;
        if(File::exists($path)){
            File::delete('$path');
        }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset/upload/category',$filename);
            $categories->image=$filename;
        }
         $categories->name=$request->input('name');
        
        $categories->phone=$request->input('phone');
        $categories->latitude=$request->input('latitude');
        $categories->longitude=$request->input('longitude');
        $categories->update();
        return redirect('categories')->with('success','Outlet Updated successfully');
    }

    public function delete($id)
    {
        $categories=Category::find($id);
        if($categories->image){
        $path='asset/upload/category/'.$categories->image;
        if(File::exists($path)){
            File::delete('$path');
        }
        $categories->delete();
        return redirect('categories')->with('success','Outlet deleted successfully');
    }}
}
