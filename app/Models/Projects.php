<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\ModelAttributes;
use App\Models\Traits\Attributes\Mainsection;
use Spatie\Translatable\HasTranslations;

class Projects extends BaseModel
{ 
    use ModelAttributes, Mainsection;
    use HasTranslations;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $translatable = ['Tittle','Paragraph1','Paragraphh','Location','PO','Consultant','GeneralC','','Subconstractor'];

    protected $table='projects';

    protected $fillable = [
        'id',
        'section_id',
        'Tittle',
        'Images',
        'Paragraph1',
        'Paragraphh',
        'Location',
        'updated_at',
        'created_at',
        'PO',
        'Consultant',
        'GeneralC',
        'Subconstractor',
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
