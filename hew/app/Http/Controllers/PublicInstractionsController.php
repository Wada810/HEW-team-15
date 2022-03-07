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
        $instractions = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as i_id',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('i.is_shared','=','1')
          ->get();
        $user = Auth::user();
        $search = Instraction::where('user_id',$user['id'])->count('likes');
        return view('public_instractions',compact('user','instractions','search'));
    }

    public function post(Request $request)
    {
        $instractions = Instraction::select([
            'u.id',
            'u.name',
            'i.theme',
            'i.updated_at',
            'i.likes',
            'i.lines',
            'i.id as i_id',
          ])
          ->from('instractions as i')
          ->join('users as u', function($join) {
              $join->on('i.user_id', '=', 'u.id');
          })
          ->where('i.is_shared','=','1')
          ->where(function($q){
            $q->where('u.name','like','%' . $_POST['search'] . '%')
                ->orWhere('i.theme','like','%' . $_POST['search'] . '%');
          })
          ->get();
        $user = Auth::user();
        $search = Instraction::where('user_id',$user['id'])->count('likes');
        return view('public_instractions',compact('user','instractions','search'));

    }
}