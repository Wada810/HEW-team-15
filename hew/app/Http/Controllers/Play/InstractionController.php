<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Instraction;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class InstractionController extends Controller
{
    public function index(Request $request)
    {
        // セッションからデータを取得
        $data = session()->all();
        $user = Auth::user();
        if(!isset($data["order"])){
            $data["order"] = [];
        }

        return view('play.instraction', compact('data','user'));
    }

    public function post(Request $request)
    {
        
        $instractions = $request->all();
        
        if (isset($_POST['other_theme'])){
            $instractions = Instraction::where('id','=',$_POST['inst_id']);
        }
        // セッションにデータを保存
        foreach($instractions as $key => $val){
            session([$key => $val]);
        }
        return redirect()->route("instraction");
    }
}