<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;

class userinfocontroller extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        echo '<pre>';
        print_r($request->all());

        $userinfo= new userinfo;
        $userinfo->name=$request['name'];
        $userinfo->email=$request['email'];
        $userinfo->address2=$request['address2'];
        $userinfo->save();
return redirect('customer/view');
    }
    public function view(){
        $userinfos = Userinfo::all();
    //     echo '<pre>';
    //     print_r($userinfo->toArray());
    
    //    echo '</pre>';
    //    die;
    $data= compact('userinfos');
        return view('userinfo-view')->with($data);
    }
    public function delete($id){
       $userinfo= Userinfo::find($id);
        if(!is_null($userinfo))
        $userinfo->delete();
    
        return redirect('customer/view');
    }   
    public function edit($id){
        $userinfo=Userinfo::find($id);
        if(is_null($userinfo))
        {
          return redirect('customer/view');  
        }else{
            $data=compact('userinfo');
            return view('form')->with($data);
        }
    }
    
}
    