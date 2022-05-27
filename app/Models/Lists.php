<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Attributes\Mainsection;
use Spatie\Translatable\HasTranslations;


class Lists extends Model
{
    //
    use ModelAttributes, Mainsection;
    use HasTranslations;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $translatable = ['list'];

    protected $table='lists';

    protected $fillable = [
        'id',
        'section_id',
        'list',
        'updated_at',
        'created_at',
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
        'Images'=> 'array',
    ];
}
