<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class ThemeController extends Controller
{
    public function index(Request $request)
    {
        // セッションからデータを取得
        $data = session()->all();
        $user = Auth::user();

        return view('play.theme', compact('data','user'));
    }

    public function post(Request $request)
    {
        $theme = $request->input('theme');
        // セッションにデータを保存
        session(['theme' => $theme]);
        session(['play' => time()]);

        return redirect()->route("order");
    }
}