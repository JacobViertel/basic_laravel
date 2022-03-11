<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'catgeory_name',
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
