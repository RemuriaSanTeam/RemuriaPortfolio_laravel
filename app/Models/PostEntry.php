<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEntry extends Model
{
    //use HasFactory;
    protected $table="post_entry";

    /*public function user(){

        //Userモデルとのリレーション
        return $this->belongsTo('App\Models\User');
    }*/
}
