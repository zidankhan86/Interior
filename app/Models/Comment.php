<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [ ];

    //User Relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Blog Relation
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    //Reply
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    }
