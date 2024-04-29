<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'discription',
        'dob',
        'imgs',
    ];

    protected $table ='news';

    protected $primaryKey ='id';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
