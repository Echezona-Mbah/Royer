<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fullname',
        'position',
        'twitter',
        'facebook',
        'instagram',
        'whatapps',
        'discription',
        'imgs',
        'status',
        'img',
    ];

    protected $table ='teams';

    protected $primaryKey ='id';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
