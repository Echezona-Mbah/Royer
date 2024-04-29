<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'name',
        'phone',
        'email',
        'status',
    ];

    protected $table ='infos';

    protected $primaryKey ='id';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
