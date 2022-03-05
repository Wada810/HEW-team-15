<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    /**
     * Display the mypage view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //$user = User::find(1);
        $user = Auth::user();
        return view('mypage.index',compact("user"));
    }
}
