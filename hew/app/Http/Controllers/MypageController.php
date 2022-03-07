<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColorPettern;
use App\Models\IconImage;
use Database\Seeders\ColorPetternSeeder;
use Illuminate\Support\Facades\Auth;

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

        return view('mypage',compact("user","data","colors","icons"));
    }
}
