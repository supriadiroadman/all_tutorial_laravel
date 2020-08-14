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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id
        ]);

        $user = User::findOrfail($id);
        $user->update($request->all());
    }


    public function destroy($id)
    {
        //
    }

    public function dataTable()
    {
        $model = User::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts._action', [
                    'model'       => $model,
                    'url_show'    => route('user.show', $model->id),
                    'url_edit'    => route('user.edit', $model->id),
                    'url_destroy' => route('user.destroy', $model->id),
                ]);
            })->addIndexColumn()->rawColumns(['action'])->make(true);
    }
}
