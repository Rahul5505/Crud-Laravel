<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.content');
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
         //validation rules in add category forms
         $request->validate([
            'name'=>'required',
            'uname'=>'required',
            'email'=>'required'    
            ]); 
            date_default_timezone_set("Asia/Calcutta");
            $data=array(
                'name'=>$request->name,
                'username'=>$request->uname,
                'email'=>$request->email
            );
    
            // Elequent ORM query builder
            UserModel::create($data);
            //return view('eyecart.admin.addcategory');
            return redirect('/')->with('success','New User add Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //create a Elequent query builder for edit category data
        
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
        $data=array(
            'name'=>$request->name,
            'username'=>$request->uname,
            'email'=>$request->email
        );

        UserModel::where('id',$id)->update($data);
        return redirect('/')->with('upd','Your data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserModel::where('id',$id)->delete();
        return redirect('/')->with('del','Data successfully deleted');
    }
}
