<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table='sections';
    protected $fillable = [
       'ID',
       'name',
       'filter'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
