<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;

class AdminController extends Controller
{
    //
    public function getUsers()
    {
        $users = users::all();

        // load the view and pass the nerds
        return View::make('admin.home')
            ->with('users', $users);
    }
}
