<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
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
        $name1 = $request->input('emailinput');
        $name2 = $request->input('deptinput');
        $name3 = $request->input('postinput');
        // return($name3);
        
        // $e_id = 102;
        // $admin = employee::where('employee_id','=', $e_id)->get();
        // return($admin);

        
        // return $name1;
        $employ = new employee();
        $employ->email_id = $name1;
                // print_r($employ->email_id);

        $employ->employee_id = 105;
        $dept = new department();
        $dept = department::where('department_name','=',$name2)->get('department_id');
        // $dept->save();
        $employ->department_id = $dept[0]->department_id;
        // return($employ->department_id);
        // 

        $posst = new post();
        $posst = post::where('post_name','=',$name3)->get('post_id');
        $employ->post_id = $posst[0]->post_id;
        
        $employ->save();

        // return;
        // return ($employ->email_id);
        return redirect('/dashboard');
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
