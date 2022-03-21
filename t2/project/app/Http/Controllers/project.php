<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\questions;
use Illuminate\Support\Facades\DB;

class project extends Controller
{
    
    function insert(Request $res)
    {
        // return $res->input();
        $res->validate(
            [
                'category'=>'required',
                'des'=>'required'
            ]
        );
        
        $data=new questions();
        $data->questions=$res->des;
        $cat_name=$res->category;
       
         $cat_id=DB::table('categories')
         ->select('category_id')
         ->where('category_name','=',$cat_name)
        ->get();

        // var_dump($cat_id);
        // die();

        
        foreach($cat_id as $temp)
        {
            $temp_id=$temp->category_id;
        }


        $data->category_id=$temp_id;
        $data->user_id=1;
        
        $data->save();
        return redirect()->back()->with('status','Question added successfully');
    }


    function home()
    {
        $data=categories::all();
        // return $data;
        // print_r($data);
        return view('home',['data1'=>$data]);
     
    }

    function answer()
    {
        $data1=categories::all(); 
        $data2=questions::all();   

        // $id=$data2->user_id;
        foreach ($data2 as $tempdata){
            $temp = $tempdata->user_id; 
            // return $temp;
        }

        // var_dump($temp);
        $results = DB::select( DB::raw("select name ,questions from users INNER join questions where users.user_id=questions.user_id;") );

        // var_dump($results);
        // die();

    //    $name= DB::table('users')
    //     -> join('name','user_id','=','users.user_id')
    //     -> join('questions','user_id','=','questions.user_id')   
    //     ->select('user.name','questions.questions')
    //     ->get();

        // return $name;
        return view('answer',compact('data1','results'));
    }
}
