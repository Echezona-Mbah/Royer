<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Even extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'amount',
        'discription',
        'dob',
        'imgs',
    ];

    protected $table ='evens';

    protected $primaryKey ='id';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
