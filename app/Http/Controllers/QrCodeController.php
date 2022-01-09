<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QrCodeController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $qrlink = 'http://www.gao.com/' . $user->restaurant->id;
        // dd($qrlink);
        return view('qrcode.index', ['restaurant' => $user->restaurant, 'qrlink' => $qrlink]);
    }
}
