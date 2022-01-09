<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RestMenuKind;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RestMenuKindController extends Controller
{
    public function edit() {
        $user = Auth::user();
        
            $menu_kinds = $user->restaurant->menu_kinds;
            $addables = config('const.menu_kind_select');
            foreach ($menu_kinds as $menu_kind) {
                $menu_kind->name = $addables[$menu_kind->kind_id];
                unset($addables[$menu_kind->kind_id]);
            }
            // $error = session-;
            // return view('menu_kind.edit', ['menu_kinds' => $menu_kinds, 'addables' => $addables]);
        

        return view('menu_kind.edit', ['menu_kinds' => $menu_kinds, 'addables' => $addables]);
        
    }

    public function delete(Request $request, $menu_kind_id) {
        //$user = Auth::user();
        if ($menu_kind_id) {
            $menu_kind = RestMenuKind::findOrFail($menu_kind_id);
            $request->validate([
                'menuKindDelete' => Rule::requiredIf(count($menu_kind->menus) > 0),
            ]);
            
            RestMenuKind::where('id', $menu_kind_id)->delete();
        }
        return redirect()->back();
    }

    public function add(Request $request) {
        if ($request->add_kind_id) {
            $user = Auth::user();
            RestMenuKind::create([
                'restaurant_id'=> $user->restaurant->id,
                'kind_id'=> $request->add_kind_id,
            ]);
        }
        return redirect()->back();
    }
}
