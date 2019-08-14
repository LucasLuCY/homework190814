<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billboard;
use App\User;
use Auth;

class BillboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Billboard = Billboard::with('User')->get();
        
        return view('billboard.index', compact('Billboard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Billboard = new Billboard;

        $Billboard->title = $request->title;
        $Billboard->content = $request->content;
        $Billboard->userId = Auth::id();
        $Billboard->save();
         return redirect('/billboard');
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
        //
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
        $Billboard = Billboard::where('id', "=", $id);
        // dd( $Billboard);

        $Billboard->update(['title' => $request->title]);
        $Billboard->update(['content' => $request->content]);

        // $Billboard->title   = $request->title;
        // $Billboard->content = $request->content;
        // $Billboard->save();

        return redirect('/billboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Billboard = Billboard::where('id', "=", $id);
        $Billboard->delete();
        return redirect('/billboard');
    }
}
