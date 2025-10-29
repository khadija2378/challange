<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
    'name',
    'email',
    'password'
];
    use HasFactory;
    public function profile() { return $this->hasOne(Profile::class); }
    public function posts() { return $this->hasMany(Post::class); }
}
