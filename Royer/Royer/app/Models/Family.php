<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'middle_name',
        'surname',
        'kindred',
        'village',
        'town',
        'Area',
        'origin',
        'address',
        'country',
        'pass_morocco',
        'year_morocco',
        'city_morocco',
        'telephone',
        'whatsapp',
        'email',
        'marital_status',
        'mother_alive',
        'name_kins',
        'village_kins',
        'redidence_kins',
        'relationship_kins',
        'telephone_kins',
        'whatsapp_kins',
        'image',
    ];

    protected $table ='families';

    protected $primaryKey ='id';
}
