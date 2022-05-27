<?php

namespace App\Models;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Attributes\Mainsection;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class Contents extends BaseModel
{ 
    use ModelAttributes, Mainsection;
    use HasTranslations;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $translatable = ['Tittle','Paragraph1','Paragraphh'];

    protected $table='content';

    protected $fillable = [
        'id',
        'section_id',
        'Tittle',
        'Paragraph1',
        'Paragraphh',
        'Paragraph3',
        'Images',
        'Image2',
        'vedios',
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
