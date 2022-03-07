<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instraction;
use App\Http\Controllers\Controller;

class ChangePublicController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('public')) {
                $data["pub"] = "public_off";
                $data["class"] = "off";
            if($request->input("public") == 1){
                $data["pub"] = "public";
                $data["class"] = "on";
            }
            //ユーザ情報
            Instraction::where('id', '=', $request->input("id"))->update([
                'is_shared' => $request->input("public"),
            ]);
            return response()->json($data);
        }
        return response()->json(false);
    }
}