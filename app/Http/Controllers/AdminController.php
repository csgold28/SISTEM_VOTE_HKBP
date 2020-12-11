<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        return view('admin.index', compact('user'));
    }
}
