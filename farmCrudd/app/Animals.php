<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = [
        'farm',
        'name',
        'type',
        'color',
        'age',
        'images',
      ];
      protected $table = 'animals'; 
      public $timestamps = FALSE; 
}
