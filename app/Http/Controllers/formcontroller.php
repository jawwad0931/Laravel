<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\messageModel;

class formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail = new messageModel;
        $detail->Message = $request['msg'];
        $detail->save();
        return view('create');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $viewing = messageModel::all();
       $CMT = compact('viewing');
       return view('view')->with($CMT);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = messageModel::find($id);
        $data->delete();
        return view('view');
    }


}
