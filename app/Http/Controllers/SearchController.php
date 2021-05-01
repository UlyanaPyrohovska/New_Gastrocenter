<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function submit(Request $request)
    {
        $search_str = $request->input( 'search_str' );

        $res = DB::table('search_res')->where('header','LIKE','%'.$search_str.'%')->orWhere('info','LIKE','%'.$search_str.'%')->get();
        if(count($res) > 0)
            return view('search')->with(['search_str'=>$search_str, 'search_count'=>count($res)])->withDetails($res)->withQuery( $search_str );
        else return view ('search')->with(['search_str'=>$search_str, 'search_count'=>count($res)])->withMessage('No Details found. Try to search again !');
        //return view('search')->with(['search_str'=>$search_str]);
    }
}
