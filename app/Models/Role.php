<?php

namespace App\Models;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    //
    protected $fillable = [
        'name', 'display_name', 'description'
    ];
}