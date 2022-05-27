<?php

namespace App\Models;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Attributes\Mainsection;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Footers extends Model
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
    public $translatable = ['address','Tittle'];

    protected $table='footer-info';

    protected $fillable = [
        'id',
        'Images',
        'Tittle',
        'facebook',
        'whatsapp',
        'instgram',
        'twitter',
        'address',
        'phone',
        'email',
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
