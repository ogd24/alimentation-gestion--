<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categories_id',
        'prix',
        'photo',
        'descripTion',

    ];




    public function roles (){

        return $this->belongsTo(Categories::class);
    }
}
