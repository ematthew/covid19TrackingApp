<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Corona;
use App\User;

class CoronaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $coronacases = Corona::all();
        return view('welcome', compact('user', 'coronacases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $corona                      = new Corona();  
        $corona->country_name        = $request->country_name;
        $corona->symptoms            = $request->symptoms;
        $corona->cases               = $request->cases;
        $corona->save();

        return redirect('/')->with('success', 'data has been saved!');


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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coronacases = Corona::findorFail($id);
        return view('edit', compact('coronacases'));
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
        $corona                      = Corona::find($id);  
        $corona->country_name        = $request->country_name;
        $corona->symptoms            = $request->symptoms;
        $corona->cases               = $request->cases;
        $corona->save();

        return redirect('/')->with('Corona Cases success', 'data has been sucessfully Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $corona = Corona::find($id);
        $corona->delete();

        return redirect('/')->with('success', 'data has been deleted!');
    }
}
