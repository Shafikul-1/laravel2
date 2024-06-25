<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = User::with('detail')->find(9);  //👉 same work new opay
        // $data = User::find(9); //👉 sodo deail table ar data view kore
        // $o = $data->detail;
        // return $o;
        // $data = User::doesntHave('detail')->get();  //👉 jarder kono details nai sodo tara show
        // $data = User::has('detail')->with('detail')->get() ; //👉 jarder sodo details ase sodo tara show
        // $data = User::has('detail', '>=', 2)->with('detail')->get() ; //👉 jarder details 2 ar soman ba besi sodo tara show
        // $data = User::withCount('detail')->get() ; //👉 count korbe details kinto show korbe user table
        $data = User::select(['name', 'email', 'gender'])->withCount('detail')->get(); //👉 select command add

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addDetails = new Detail([
            'city' => 'Bangladesh',
            'cardId' => 34534,
            'roll' => 12
        ]);

        $findUser = User::find(2);
        $findUser->detail()->save($addDetails);
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
