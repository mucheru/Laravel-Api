<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsCountryModel extends Model
{
    use HasFactory;
    protected $table="_z_country";
    public $timestamps=false;

    protected $fillable =[
        'id',
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
        
    ];
}
