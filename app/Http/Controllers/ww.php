<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Omar;
class ww extends Controller
{
    //
    public function omar(){
      //  $o=Omar::get();
      $o=Omar::orderby('id','asc') -> paginate(3);
        return view('omar',compact('o'));
    }
    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required|min:5|string',
            'email'=>'required|min:3|string',

        ]);

        $file=$request->img;
        $img_name=date('YmdHms').".".$file->getClientOriginalExtension();
        $pp=new Omar();
        $pp->name=$request->name;
        $pp->email=$request->email;
        $pp->password=$request->password;
        $pp->img=$img_name;
        $ext="imges/";
        $file->move($ext,$img_name);
        $pp->save();
        return back();

    }
    public function delete($id){
        $pa=Omar::find($id);
        $pa->delete();
        return back();
    }
    public function edit(Omar $id){
        return view('updat',compact('id'));
    }
    public function update($id,Request $request){
        $qq=Omar::find($id);
        $qq->name=$request->name;
        $qq->email=$request->email;
        $qq->password=$request->password;
    $qq->save();
    return redirect('omar');
    }







public function show(){
    return view('master');
}










}

