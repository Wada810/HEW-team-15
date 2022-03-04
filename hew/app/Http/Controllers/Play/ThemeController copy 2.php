<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class ThemeController extends Controller
{
    /**
     * Display the mypage view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $theme = $_REQUEST["theme"] ?? "";
        return view('play/theme',compact("theme"));
    }
}