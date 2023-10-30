<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'category_id',
                          'title', 'slug', 'thumbnail',
                          'description', 'status',
                          'featured', 'post_image',
                          'post_description'];
    /**
     * Get the user that owns the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get the user that owns the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    //Like Relation
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'blog_id', 'user_id');
    }

    //Check Like
    public function isLikedBy(User $user)
    {
        return $this->likes->contains($user);
    }


}
