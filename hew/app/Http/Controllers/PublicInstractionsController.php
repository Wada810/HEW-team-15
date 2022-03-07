<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instraction;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PublicInstractionsController extends Controller
{
    public function index(Request $request)
    {
        $instractions = Instraction::where('is_shared', '=', 1 )->get();
        $user = Auth::user();
        return view('public_instractions',compact('user'));
    }
}