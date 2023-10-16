<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profils.edit', [
            'user' => User::where('id', auth()->user()->id)->first()
        ]);  
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
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($users)
    {
        return view('dashboard.profils.edit', [
            'name' => $users,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$users)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required',
            // 'password' => 'required',
            // 'password_confimation' => 'confirmed'
            
            
        ];
        
        if ( $request->password != $request->password_confirmation) {
        return redirect('/dashboard/profils')->with('error', 'Please confirmation password!');
            }
        $validatedData = $request->validate($rules);
        if(isset($validatedData['password'])){
        $validatedData['password'] = bcrypt($validatedData['password']);}

        User::where('id', $users)

            ->update($validatedData);

       
        return redirect('/dashboard/profils')->with('success', 'Your profile has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
