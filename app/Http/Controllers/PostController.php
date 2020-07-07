<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function admin()
    {
        // / Cara ke pertama
        if (Gate::allows('isAdmin')) {
            return 'You is Admin';
        }
        return abort(401);

        // Cara ke dua
        // $this->authorize('isAdmin');
        // your code ...
    }

    public function manager()
    {
        // if (Gate::allows('isManager')) {
        //     return 'You is Manager';
        // }
        // return abort(401);

        // Otomatis menampilkan 403 This action is unauthorized jika false
        if (Gate::authorize('isManager')) {
            return 'You is Manager';
        }
    }

    public function user()
    {
        if (Gate::any(['isUser', 'isAdmin', 'isManager'])) {
            return 'You is User/ Admin/ Manager';
        }
    }

    public function others()
    {
        if (Gate::denies('isUser')) {
            return "Only user can't see";
        }
        return abort(401);
    }


    public function postAdmin()
    {
        return 'You is Admin';
    }

    public function postManager()
    {
        return 'You is Manager';
    }

    public function postUser()
    {
        return 'You is User (gate with middleware)';
    }

    public function postOthers()
    {
        return 'Not protected in middleware';
    }
}
