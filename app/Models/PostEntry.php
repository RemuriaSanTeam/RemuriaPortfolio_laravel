<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEntry extends Model
{
    //use HasFactory;
    protected $table="post_entry";
    
    protected $fillable=[
        "title",
        "author",
        "image",
        "body",
    ];
}
