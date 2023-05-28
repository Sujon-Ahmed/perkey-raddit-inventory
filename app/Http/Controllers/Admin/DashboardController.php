<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //return dahsboard page
    public function index()
    {
        $user = Auth::user();
        return view('backend.layouts.master', [
            'user' => $user,
        ]);
    }
}