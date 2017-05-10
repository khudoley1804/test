<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $timestamps = false;
    
    /**
     * The roles that belong to the user.(многие ко многим)
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
