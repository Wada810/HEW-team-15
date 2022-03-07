<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use APP\Models\Instraction;

class ColorController extends Controller
{
    public function getUsersBySearchName($sort)
    {
        $users = $this->user->orderBy($sort, 'desc')->get(); //出品数もほしいため、withCountでitemテーブルのレコード数も取得
        return response()->json($users);
    }
}