<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkType extends Model
{
    protected $fillable = ['mark', 'description'];
    public $timestamps = false;
}
