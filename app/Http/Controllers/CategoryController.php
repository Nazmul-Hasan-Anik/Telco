<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
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
        return redirect('categories')->with('success','Outlet inserted successfully');
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