<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title','status','category'
    ];
    // protected $guarded = [
    //     'title'
    // ];
}
