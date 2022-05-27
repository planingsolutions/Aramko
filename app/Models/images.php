<?php

namespace App\Models;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Attributes\Mainsection;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class images extends BaseModel
{ 
    use ModelAttributes, Mainsection;
    use HasTranslations;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='images';

    protected $fillable = [
        'id',
        'section_id',
        'images',
        'beforImg',
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
