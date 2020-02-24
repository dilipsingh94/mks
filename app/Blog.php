<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['subheading','writer','posttitle','blog','thubmnail','link'];
}
