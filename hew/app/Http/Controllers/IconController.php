<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class IconController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('path')) {
            //ユーザ情報
            $user = Auth::user();
            User::where('id', '=', $user["id"])->update([
                'icon_image' => $request->input("path") . '.png'
            ]);
            return response()->json(asset('img/' . $request->input("path") . '.png'));
        }
        return response()->json(asset('img/panda.png'));
    }
}