<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class listController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {


        // raw sql start
        
        // $rs = DB::select('SELECT * FROM menu WHERE item_status = ?', [1]);

        // raw sql end


        // query builder start
        
        $rs = DB::table('menu')
        // ->where([
        //     ['item_status', '=', '1'],
        //     ['price', '<', 50]
        // ])
        ->orderBy('price')
        ->get();
            
        // query builder end


        return view('menu', [
            'rows' => $rs,
        ]);
    }
}


// select - where - orWhere - orderBy - skip - take
// Search for where








