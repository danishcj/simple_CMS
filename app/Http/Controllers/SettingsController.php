<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\UpdateUserRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the Users.=
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('settings.index', compact('users'));
    }

    /**
     * Show the form for creating a new User.
     */
    public function create()
    {     
        $user = new User();
        return view('settings.create', compact('user'));
    }

    /**
     * Store a newly created User in storage.
     *
     */
    public function store(AddUserRequest $request)
    {
        $user = new User;
        $user->name     = $request->input('name');
        $user->email  = $request->input('email');
        $user->password  = Hash::make($request->input('password'));
        $user->level  = $request->input('level');
        $user->save();
        return redirect()->route('settings.index')->with('success', "New user has been added");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified User.
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('settings.edit', compact('user'));
    }

    /**
     * Update the specified User in storage.
     */
    public function update(Request $request, User $user)
    {
        $userupd = User::find($request->id);
        $userupd->name = $request->input('name');
        $userupd->email  = $request->input('email');
        $userupd->level  = $request->input('level');
        $userupd->save();
        return redirect()->route('settings.index')->with('success', "User has been updated");
    }

    /**
     * Remove the specified User from storage.
     */
    public function destroy($id)
    {
        if (User::where([['id', '=', $id]])->exists()) {
            $product = User::find($id);
            $product->delete();

        return redirect()->route('settings.index')->with('success', "User has been deleted");
        } else {
            
        return redirect()->route('settings.index')->with('error', "User to delete not found");
        }
    }
}
