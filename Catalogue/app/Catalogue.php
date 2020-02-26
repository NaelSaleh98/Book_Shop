<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Catalogue extends Model{
 
    protected $fillable = [
        'name', 'counts', 'price' , 'topic'
    ];
}
