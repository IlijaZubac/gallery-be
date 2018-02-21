<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    public $timestamps = false;
 
    public function users(){
        return $this->belongsTo(User::class);
    }
    public static function search($term)
    {
        return self::where('name', 'LIKE', '%'.$term.'%')->get();
    }
}
