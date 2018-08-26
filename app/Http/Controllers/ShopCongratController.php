<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input; //ใช้คำสั่ง Input
use Illuminate\Support\Facades\DB;  //ใช้คำสั่ง DB หรือ Database
use Illuminate\Support\Facades\Redirect; //ใช้คำสั่ง Redirect
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class shopcongratcontroller extends controller{
    //frontend
    public function congratpage($code){
        $member=DB::table('member')->where('code',$code)->first();

        if($member==NULL){
            $member=DB::table('member')->where('code','0')->first();
        }
        if($member->name=="coea"){
            $member=DB::table('member')->where('code','41')->first();
        }
        if($member->name=="coeall"){
            $member=DB::table('member')->where('code','42')->first();
        }
        if($member->name=="other"){
            $member=DB::table('member')->where('code','88')->first();
        }
        return view('congratpage.front')
        ->with('data',$member);
    }

    public function admincontrol(){
        $member=DB::table('member')->orderBy('id','ASC')->get();
        return view('congratpage.admin')
        ->with('data',$member);
    }

    public function activetagrun(Request $request){
        //Input
        $tagnumber=$request->input('tagno');
        $tagname=$request->input('membername');
        DB::table('member')
        ->where('name', $tagname)
        ->update(['code' => $tagnumber]);
        return Redirect::to('/admin');
    }

    public function newtagrun(Request $request){
        //Input
        $tagnumber=$request->input('tagno');
        $tagname=$request->input('membername');
        DB::table("member")->insert(
            ['code'=>$tagnumber,
            'name'=>$tagname]
        );
        return Redirect::to('/admin');
    }

    public function tagview(){
        $member=DB::table('member')->orderBy('code','ASC')->get();
        return view('congratpage.tagview')
        ->with('data',$member);
    }

}