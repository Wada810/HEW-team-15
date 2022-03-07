<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class FriendProfileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('user_id')) {
            //ユーザ情報
            $friend_prof = User::where('id', '=', 'user_id')->get();
            return response()->json($friend_prof);
        }
        return response()->json(false);
    }
}