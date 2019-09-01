<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    //
    protected $table = "tasks";

    protected $fillable = [
    
        'task_name',
        'task_description',
        'task_precentage',
        'user_id'
    ];
}
