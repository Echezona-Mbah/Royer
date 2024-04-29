<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'categories',
        'title',
        'discription',
        'imgs',
    ];

    protected $table ='abouts';

    protected $primaryKey ='id';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
