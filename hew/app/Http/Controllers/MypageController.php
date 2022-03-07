<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColorPettern;
use App\Models\IconImage;
use Database\Seeders\ColorPetternSeeder;
use Illuminate\Support\Facades\Auth;
use App\Models\Instraction;

class MypageController extends Controller
{
    /**
     * Display the mypage view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // セッションからデータを取得
        $data = session()->all();
        if(!isset($data["order"])){
            $data["order"] = [];
        }


        //ユーザ情報
        $user = Auth::user();
        $user["next"] = 0;
        for($i = 1; $i <= $user["level"]; $i++){
            $user["next"] += $i;
        }
        //色
        $colors = ColorPettern::where('level', '<=', $user["level"])->get();
        //アイコン
        $icons = IconImage::where('level', '<=', $user["level"])->get();
        
        //ユーザやることリスト
        $instraction = Instraction::where('user_id',$user['id'])->get();
        
        //ユーザそういいね数
        $favs = Instraction::where('user_id',$user['id'])->sum('likes');


        return view('mypage',compact("user","data","colors","icons","instraction","favs"));

    }
}
