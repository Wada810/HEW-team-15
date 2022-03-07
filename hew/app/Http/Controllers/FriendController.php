<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Instraction;

class FriendController extends Controller
{
    public function index(Request $request)
    {
        $friend_prof = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as inst_id',
            'u.icon_image',
            'u.level',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('u.id','=',1)
          ->get();

          $friend_inst = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as inst_id',
            'u.icon_image',
            'u.level',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('u.id','=',1)
            ->where(function($q){
                $q->orWhere('i.is_shared','=',1);
            })
          ->get();
        
        $friend_star = User::where('user_id','=',1)
          ->sum('likes');
        return view('friend_prof', compact('friend_prof','friend_inst','friend_star'));
    }
}