<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function reactions()
    {
        return $this->belongsToMany(Item::class, PostReaction::class);
    }
    
    public function poster()
    {
        return $this->belongsTo(User::class);
    }
}
