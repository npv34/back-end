<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function delete(){}

    public function __construct()
    {
    }

    function index()
    {
        $users = User::all();

    }
}
