<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Instraction;

class FriendProfileController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('user_id')) {
            //ユーザ情報
            $friend_prof = Instraction::select([
                'u.id',
                'u.name',
                'i.theme',
                'i.updated_at',
                'i.likes',
                'i.lines',
                'i.id as inst_id',
              ])
              ->from('instractions as i')
              ->join('users as u', function($join) {
                  $join->on('i.user_id', '=', 'u.id');
              })
              ->where('u.id','=',$request->input("user_id"))
              ->where('i.id','=',$request->input("inst_id"))
              ->get();
            return response()->json($friend_prof);
        }
        return response()->json(false);
    }
}