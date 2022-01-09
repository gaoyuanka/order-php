<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'furi_name',
        'post',
        'address',
        'rest_kind',
        'open_time',
        'close_time',
        'link',
        'info',
    ];

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function menu_kinds(){
        return $this->hasMany(RestMenuKind::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
