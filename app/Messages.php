<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
    	'temat', 'tresc', 'do_id', 'od_id'
    ];
}
