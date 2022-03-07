<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role','3')->get();
        return view('backend.pages.User.index',compact('users'));
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
    
    public function manage_profile(){
        $user = Auth::User()->id;
        $profile = User::where('id',$user)->first();
       
        return view('pages.manage_profile',compact('profile'));
    }

    public function profile_update(Request $request,$id){

        
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->dob = $request->dob;
        $profile->gender = $request->gender;
        if($request->profile_img != null){
        $Profileimg = time().'.'.request()->profile_img->getClientOriginalExtension();
        request()->profile_img->move(public_path('images/User_profile'),$Profileimg);
        $profile->profile_img = $Profileimg;
        }
        $profile->lang = json_encode($request->language);
        $profile->save();
        return back();
    }
}
