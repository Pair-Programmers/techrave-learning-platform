<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('id', 'desc')->get();
        return view('pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'is_active' => ['nullable'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'is_active'=>$request->is_active,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with(['message'=>'added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::findOrFail($user->id);
        return view('adminpanel.pages.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::findOrFail($user->id);
        return view('pages.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $id = $user->id;

        $this->validate($request, [
            'name' => 'string|required',
            'role' => 'string|required',
            'is_active' => 'nullable',
            'password' => 'min:5|nullable',
            'email' => 'string|required|unique:users,email,' . $id
        ]);

        $user = \App\Models\User::find($id);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->is_active = $request->is_active;
        $user->email = $request->email;
        if($request->filled('password')){
            $user->password = $request->password;
        }
        $user->save();

        return redirect()->back()->with(['message'=>'Updated Successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user = \App\Models\User::find($user->id);
        $user->delete();
        return redirect()->back()->with(['message'=>'Deleted Successfuly']);
    }
}
