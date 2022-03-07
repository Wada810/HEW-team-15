<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('theme')) {
            //ユーザ情報
            $user = Auth::user();
            User::where('id', '=', $user["id"])->update([
                'color' => $request->input("theme"),
            ]);
            return response()->json(true);
        }
        return response()->json(false);
    }
}