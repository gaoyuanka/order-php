<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestMenuKind extends Model
{
    use HasFactory;


    protected $fillable = [
        'restaurant_id',
        'kind_id',
    ];

    public $name = '';

    public function menus(){
        return $this->hasMany(Menu::class);
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
