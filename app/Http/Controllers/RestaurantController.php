<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Rules\KatakanaRule;

class RestaurantController extends Controller
{
    public function show() {
        $user = Auth::user();
        $restaurant = $user->restaurant;
        if (!$restaurant) {
            $restaurant = Restaurant::create([
                'user_id' => $user->id,
            ]);
        }
        $time = Carbon::parse($restaurant->open_time)->format('H:i') 
                . '~' .
                Carbon::parse($restaurant->close_time)->format('H:i') ;
        
        return view('restaurant.show', ['restaurant' => $restaurant, 'time' => $time]);
    }

    public function edit() {
        $user = Auth::user();
        
        return view('restaurant.edit', ['restaurant' => $user->restaurant]);
    }

    public function update(Request $request) {
        $user = Auth::user();

        //dd(strlen($request->post));
        $validated = $request->validate([
            'name' => ['required', 'max:15'],
            'furi_name' => ['required', 'max:50', new KatakanaRule],
            'post' => ['required', 'size:7', 'regex:/^[0-9]+$/'],
            'address' => ['required', 'max:150'],
            'open_time' => ['required','before:close_time'],
            'close_time' => ['required'],
            'link' => ['active_url', 'nullable'],
            'info' => ['max:250', 'nullable'],
        ],[
            //'required' => ':attribute を入力してください。'
            'open_time.before' => '営業時間(開始)には、営業時間(終了)より前の時間を指定してください。'
        ],[
            'name' => '店舗名',
        ]);
        $user->restaurant->update($validated);
        return redirect(route('restaurant'));
    }
}
