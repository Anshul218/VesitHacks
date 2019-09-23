<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\department;
use App\post;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $name1 = $request->input('input1');
        $name2 = $request->input('input2');
        $name3 = $request->input('input3');
        // return $name1;
        $employ = new employee();
        $employ->email_id = $name1;
        // $employ->save();
        print_r($employ->email_id);

        $dept = new department();
        $dept = department::where('department_name','=',$name2)->get();
        // $dept->save();
        print_r($dept);

        $posst = new post();
        $posst = post::where('post_name','=',$name3)->get();
        // $posst->save();
        print_r($posst);
        
        return;
        // return ($employ->email_id);
        // return redirect('/dashboard');
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
