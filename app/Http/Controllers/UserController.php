<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    // function users(){
    //     $users= DB::select('select * from users');
    //     return view('users',['users'=>$users]);
    // }
    function queries(){
        // $result = DB::table('users')->get();
        // $result = DB::table('users')->where('city','Jaipur')->get();
        //$result = DB::table('users')->first();
        //$result=[$result];

        // $result = DB::table('users')->insert([
        //     'name'=>'Ajay',
        //     'course'=>'BBA',
        //     'city'=>'Pune',
        // ]);
        // if($result){
        //     return "Data inserted";
        // }else{
        //     return "Data not inserted";
        // }

        //  $result = DB::table('users')->where('name','Deepak')->update(['course'=>'MCA']);

        // if($result){
        //     return "Data updated";
        // }else{
        //     return "Data not updated";
        // }

         $result = DB::table('users')->where('id','5')->delete();

        if($result){
            return "Data Deleted";
        }else{
            return "Data not Deleted";
        }

        // return view('users',['users'=>$result]);
    }
}
