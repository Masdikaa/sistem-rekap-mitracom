<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('pages.datamaster.user.index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('pages.datamaster.user.create',);
    }

    public function store(Request $request)
    {
        $user = User::create([
                    'username' =>($request->input('username')),
                    'password' =>Hash::make($request->input('password')),
                    'role' =>($request->input('role')),
                ]);

                return redirect()->route('datamaster-user.index');
    }
    public function edit(string $id)
    {

        $user = User::find($id);

        return view('pages.datamaster.user.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'username' => $request->input('username'),
            'role' => $request->input('role'),
        ]);
    
        // Check if a new password was provided
        if ($request->filled('password')) {
            // Hash the new password and update it
            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);
        }
        return redirect()->route('datamaster-user.index');
    }


    public function destroy(string $id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect()
            ->route('datamaster-user.index');
    }
}

