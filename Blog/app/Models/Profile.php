<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =['user_id','bio','avatar'];
    use HasFactory;
    public function user() { return $this->belongsTo(User::class); }
    public function comments() { return $this->morphMany(Comment::class, 'commentable'); }
}
