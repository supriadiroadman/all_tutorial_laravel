<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function admin()
    {
        if (Gate::allows('isAdmin')) {
            return 'You is admin';
        }
        return abort(401);
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
            return 'You is user/ admin/ manager';
        }
    }

    public function others()
    {
        if (Gate::denies('isUser')) {
            return "Only user cant see";
        }
        return abort(401);
    }
}
