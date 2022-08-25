<?php

namespace App\Http\Controllers;

use App\Models\Outlets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class OutletController extends Controller
{
    //
    public function allout(){
      $outlets=Outlets::all();
      return view('admin.outlet',compact('outlets'));
    }
    public function storeout(Request $request){
       $outlets= new Outlets();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset/upload/outlet',$filename);
            $outlets->image=$filename;

        }
       
        $outlets->name=$request->input('name');
        
        $outlets->phone=$request->input('phone');
        $outlets->latitude=$request->input('latitude');
        $outlets->longitude=$request->input('longitude');
        
        $outlets->save();
        return redirect()->route('all.out')->with('success','Outlet inserted successfully');
    }
    public function editout($id){
      $outlets=Outlets::find($id);
      return view('admin.updateoutlet',compact('outlets'));
    }
    public function update(Request $request ,$id){
     $outlets=Outlets::find($id);
        if($request->hasFile('image')){
        $path='asset/upload/outlet/'.$outlets->image;
        if(File::exists($path)){
            File::delete('$path');
        }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('asset/upload/outlet',$filename);
            $outlets->image=$filename;
        }

        
        $outlets->name=$request->input('name');
        
        $outlets->phone=$request->input('phone');
        $outlets->latitude=$request->input('latitude');
        $outlets->longitude=$request->input('longitude');
        $outlets->update();
      return Redirect()->route('all.outlet')->with('success','Outlet updated successfully');
    }
    public function delete($id){
      $outlets=Outlets::find($id);
        if($outlets->image){
        $path='asset/upload/outlet/'.$outlets->image;
        if(File::exists($path)){
            File::delete('$path');
        }
        $outlets->delete();
      return Redirect()->back()->with('success','Outlet deleted successfully');
    }}
}
