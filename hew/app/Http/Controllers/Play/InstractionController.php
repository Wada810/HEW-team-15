<?php

namespace App\Http\Controllers\Play;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
class InstractionController extends Controller
{
    /**
     * Display the mypage view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('play/instraction');
    }
}