<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ColorPettern;
use App\Models\IconImage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Instraction;

class FInishController extends Controller{
    public function index(Request $request){
        // セッションからデータを取得
        $data = session()->all();
        $user = Auth::user();
        $user["next"] = 0;
        for($i = 1; $i <= $user["level"]; $i++){
            $user["next"] += $i;
        }
        $user["total_exp"] += 1;
        $user["level_up"] = false;
        if($user["total_exp"] >= $user["next"]){
            $user["level_up"] = true;
        }
        $colors = ColorPettern::where('level', '=', $user["level"] + 1)->get();
        $icons = IconImage::where('level', '=', $user["level"] + 1)->get();
        return view('play.finish', compact('data','user','colors','icons'));
    }

    public function post(Request $request)
    {
        $public = $request->input("public");
        if($public == "false"){
            $public = false;
        }else{
            $public = true;
        }
        $data = session()->all();
        $user = Auth::user();
        $user["next"] = 0;
        for($i = 1; $i <= $user["level"]; $i++){
            $user["next"] += $i;
        }
        $user["total_exp"] += 1;
        if($user["total_exp"] >= $user["next"]){
            User::where('id', '=', $user["id"])->update([
                'level' => $user["level"] + 1,
                'total_exp' => $user["total_exp"]
            ]);
        }else{
            User::where('id', '=', $user["id"])->update([
                'total_exp' => $user["total_exp"]
            ]);
        }
        $order = implode("\,",$data["order"]);
        Instraction::create([
            'user_id' => $user["id"],
            'theme' => $data["theme"],
            'instraction' => $order,
            'likes' => 0,
            'lines' => count($data['order']),
            'total_lines' => count($data['order']),
            'is_shared' => $public
        ]);

        return redirect()->route("home");
    }
}