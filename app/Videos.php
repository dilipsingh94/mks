<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Cohensive\Embed\Facades\Embed;

class Videos extends Model
{
    protected $fillable = ['videotitle','uploadername','embedlink','description'];
}
