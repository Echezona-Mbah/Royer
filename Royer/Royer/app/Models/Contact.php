<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'discription',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];

    protected $table ='contacts';

    protected $primaryKey ='id';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
