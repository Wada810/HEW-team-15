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
        $user = Auth::user();
        $instractions = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as i_id',
            'u.icon_image',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('i.is_shared','=','1')
          ->where('i.user_id','!=',$user['id'])
          ->get();
        $search = Instraction::where('is_shared','=',1)->where('user_id','!=',$user['id'])->count();
        return view('public_instractions',compact('user','instractions','search'));
    }

    public function post(Request $request)
    {
        $user = Auth::user();
        $instractions = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as i_id',
            'u.icon_image',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('i.is_shared','=','1')
          ->where('i.user_id','!=',$user['id'])
          ->where(function($q){
            $q->where('i.theme','like','%' . $_POST['search'] . '%');
          })
          ->get();
        $search = Instraction::where('is_shared','=',1)->where('user_id','!=',$user['id'])->where(function($q){
            $q->where('theme','like','%' . $_POST['search'] . '%');
          })->count();
        return view('public_instractions',compact('user','instractions','search'));

    }
}