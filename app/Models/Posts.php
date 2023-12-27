<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'is_publised', 'category_id'];
    protected $casts =[
        'is_publised' =>'boolean',
    ];
    
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
