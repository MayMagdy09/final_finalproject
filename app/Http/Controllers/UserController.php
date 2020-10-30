<?php

namespace App\Http\Controllers;
use App\Mail\AddNewUser;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("resturant.controladmin.users.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resturant.controladmin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" =>"required",
            "email" =>"required|email"
        ]);
        $text ="qwertyuiopasdfghjklzxcvbnm0124563987#$()_";
        $text = str_shuffle($text);
        $pw = substr($text , 1,10);
        $u = new User();
        $u->name =$request->name;
        $u->email =$request->email;
        $u->role ="admin";
        $u->password =bcrypt($pw);
        $u->save();

        Mail::to($request->email)->send(new AddNewUser($u,$pw));

        return redirect()->route("user.index");

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
        
        return redirect()->route("user.index");
    }
}
