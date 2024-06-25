<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail;
use Illuminate\Http\Request;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Detail::with('user')->find(2);
        // echo $data->city."<br>";
        // echo $data->user->email;

        // $data = Detail::with('user')->whereRaw('roll>30')->get();  //👉 first table search `details` table
        // $data = Detail::withWhereHas('user', function($quey){
        //     $quey->where('gender', 'Other');
        // })->get();  //👉 se4cond table find get data 1 torika

        $users = User::where('gender', 'Other')->get(); 
        $fullData = Detail::whereBelongsTo($users)->get(); //👉 se4cond table find get data 1 torika

        return $fullData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    }
}
