<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email'
        ]);

        $model = User::create($request->all());
        return $model;
    }


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id
        ]);

        $user->update($request->all());
    }


    public function destroy(User $user)
    {
        $user->delete($user);
    }

    public function dataTable()
    {
        $user = User::query();
        return DataTables::of($user)
            ->addColumn('action', function ($user) {
                return view('layouts._action', [
                    'user'        => $user,
                    'url_show'    => route('user.show', $user->id),
                    'url_edit'    => route('user.edit', $user->id),
                    'url_destroy' => route('user.destroy', $user->id),
                ]);
            })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}
