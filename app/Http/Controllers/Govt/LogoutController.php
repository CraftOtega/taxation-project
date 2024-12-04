<?php

namespace App\Http\Controllers\Govt;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
