<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name',
        'furi_name',
        'price',
        'rest_menu_kind_id',
        'is_lunch',
        'is_dinner',
        'info',
    ];

    public function restMenuKind(){
        return $this->hasOne(RestMenuKind::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
