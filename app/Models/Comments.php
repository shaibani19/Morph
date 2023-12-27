<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'post_id', 'user_id'];
    
    // Many-to-One relationship with Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    // Many-to-One relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
