<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class SuperAdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->is_admin != '2') {
            return abort(403);
        }
         

        return view('dashboard.users.index', [
            'users' => Users::all()
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
     * @param  \App\Models\superadmin  $superadmin
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($users)
    {
        $user = Users::where('id', $users)->first();
      
        return view('dashboard.users.edit', [
            'user' => $user,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required',
            // 'password' => 'required',
            // 'password_confirmation' => 'confirmed', 
            'is_admin' => 'required',
            
        ];

        if ( $request->password != $request->password_confirmation) {
            return redirect('/dashboard/users/'.$users.'/edit')->with('error', 'Please confirmation password!');
                }
            $validatedData = $request->validate($rules);
        if(isset($validatedData['password'])){
            $validatedData['password'] = bcrypt($validatedData['password']);}
        

        Users::where('id', $users)
            ->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'User profil has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
