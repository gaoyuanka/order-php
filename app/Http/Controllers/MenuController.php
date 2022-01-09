<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\KatakanaRule;
use App\Models\Menu;

class MenuController extends Controller
{
    public function show() {
        $user = Auth::user();
        if ($user->restaurant) {
            $menus = $user->restaurant->menus;
        }
        return view('menu.show', ['menus' => $menus]);
    }

    public function edit(Menu $menu) {
        $user = Auth::user();
        return view('menu.edit', ['menu' => $menu,'menu_kinds' => $user->restaurant->menu_kinds]);
    }

    public function create() {
        $user = Auth::user();
        return view('menu.create', ['menu_kinds' => $user->restaurant->menu_kinds]);
    }

    public function update(Request $request, Menu $menu) {
        if ($request->input('action') != 'back') {
            $data = $this->validateData($request);
            $data['is_lunch'] = $request->has('is_lunch');
            $data['is_dinner'] = $request->has('is_dinner');
            $data['rest_menu_kind_id'] = $request->rest_menu_kind_id;
            $menu->update( $data);
        }
        return redirect(route('menu'));
    }

    public function store(Request $request) {
        if ($request->input('action') != 'back') {
            $user = Auth::user();
            $data = $this->validateData($request);
            $data['is_lunch'] = $request->has('is_lunch');
            $data['is_dinner'] = $request->has('is_dinner');
            $data['restaurant_id'] = $user->restaurant->id;
            $data['rest_menu_kind_id'] = $request->rest_menu_kind_id;
            $query = Menu::create($data);
        }
        return redirect(route('menu'));
    }

    public function validateData (Request $request) {
        return $request->validate([
            'name' => ['required', 'max:15'],
            'furi_name' => ['required', 'max:50', new KatakanaRule],
            'price' => ['required', 'integer'],
            // 'is_lunch' => ['required', 'max:150'],
            // 'is_dinner' => ['required','before:close_time'],
            'info' => ['max:250', 'nullable'],
        ],[
        ],[
            'name' => '料理名',
            'info' => '料理紹介',
        ]);
    }

    public static function getOnlyRead() {
        return 'readonly';
    }

    // public function update(Request $request) {
    //     $user = Auth::user();

    //     //dd(strlen($request->post));
    //     $validated = $request->validate([
    //         'name' => ['required', 'max:15'],
    //         'furi_name' => ['required', 'max:50', new KatakanaRule],
    //         'post' => ['required', 'size:7', 'regex:/^[0-9]+$/'],
    //         'address' => ['required', 'max:150'],
    //         'open_time' => ['required','before:close_time'],
    //         'close_time' => ['required'],
    //         'link' => ['active_url', 'nullable'],
    //         'info' => ['max:250', 'nullable'],
    //     ],[
    //         //'required' => ':attribute を入力してください。'
    //         'open_time.before' => '営業時間(開始)には、営業時間(終了)より前の時間を指定してください。'
    //     ],[
    //         'name' => '店舗名',
    //     ]);
    //     $user->restaurant->update($validated);
    //     return redirect(route('restaurant',$user->restaurant));
    // }
}
