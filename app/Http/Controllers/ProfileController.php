<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $user=Auth::user();

        return view('profile.edit',['user'=>$user]);
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
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],

            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'district' => ['required'],
            'province' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            
        ]);

        $user=User::find($id);

        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->province=$request->province;
        $user->district=$request->district;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->gender=$request->gender;

        $user->save();
        return redirect()->back()->with('success','profile updated.');



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
