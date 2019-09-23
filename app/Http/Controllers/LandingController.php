<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landingpages.websitelanding');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('projects.projects');
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
    public function assessment()
    {
        return view('assessment.assessing');
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
    public function destroy()
    {
        return view('assessment.assessmentpage');
    }

    public function login()
    {
        return view('loginpage.login');    
    }
    
    public function dashboard()
    {
        return view('dashboard.admin_dashboard');    
    }

    public function profile()
    {
        return view('userprofile.profile');    
    }

    public function contact()
    {
        return view('contact.contact'); 
    }
    public function managers(){
        return view('table_list.manager');  
    }

    public function employees(){
        return view('table_list.employee');
    }

    public function employee_modal(){
        return view('modals.add_employee');
    }

    public function manager_modal(){
        return view('modals.add_manager');
    }

    public function editprofile(){
        return view('userprofile.editprofile');
    }

    public function employee_remove(){
        return view('modals.remove_employee');
    }

    public function employee_update(){
        return view('modals.update_employee');
    }

    public function createproject(){
        return view('projects.createproject');
    }

    public function createhead(){
        return view('projects.createhead');
    }

    public function addemp(){
        return view('projects.addemp');
    }
}
