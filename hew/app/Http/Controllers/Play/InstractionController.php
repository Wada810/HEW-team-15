<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class InstractionController extends Controller
{
    public function index(Request $request)
    {
        // セッションからデータを取得
        $data = session()->all();

        return view('play.instraction', compact('data'));
    }

    public function post(Request $request)
    {
        $instractions = $request->all();
        // セッションにデータを保存
        foreach($instractions as $key => $val){
            session([$key => $val]);
        }
        return redirect()->route("instraction");
    }
}