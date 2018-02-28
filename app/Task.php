<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['user_id','name','completed'];
    protected $quarded = ['popcorn'];  // you specify the fields that you dont want to allow

    public function scopeIncomplete($query){
        return $query->where('completed','0');
    }

    public static function isComplete(){
        return static::where('completed', 1)->get();
    }



}
