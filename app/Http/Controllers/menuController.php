<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rs = Menu::all();

        return view('back/m_index', [
            'rows' => $rs, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back/m_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $valid = $request -> validate([

            'menu_name' => ['required', 'max: 150', 'unique: menu'],
            'menu_info' => ['required', 'max: 250'],
            'menu_price'=> ['required', 'numeric'],

        ]);



        //
        $new = new Menu();
        $new -> menu_name = $request->input('menu_name');
        $new -> price = $request->input('menu_price');
        $new -> img = $request->input('menu_img');
        $new -> info = $request->input('menu_info');
        $new -> item_status = $request->input('menu_status');
        $new -> save();

        return redirect()
            -> route('menus.index') 
            -> with('msg', 'Record added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $row = Menu::find($id);
        return view('back/m_show', [
            'row' => $row,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $row = Menu::find($id);
        return view('back/m_edit', [
            'row' => $row,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $upd = Menu::find($id);
        $upd -> menu_name   = $request->input('menu_name');
        $upd -> price       = $request->input('menu_price');
        $upd -> img         = $request->input('menu_image');
        $upd -> info        = $request->input('menu_info');
        $upd -> item_status = $request->input('menu_status');
        $upd -> save();

        return redirect() 
            -> route('menus.index') 
            -> with('msg', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $rc = Menu::find($id);
        // $rc -> delete();
        Menu::destroy($id);

        return redirect() 
            -> route('menus.index') 
            -> with('msg', 'Record deleted successfully');
        // return $id;
    }
}
