<?php

namespace App\Models;

use App\Policies\PostPolicy;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[UsePolicy(PostPolicy::class)]
// #[ObservedBy(PostObserver::class)]
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'user_id',
        'title',
        'content',
    ];

    // protected $primaryKey = 'uuid';

    // protected $table = 'posts';

    protected $with = ['user'];

    protected $withCount = ['user'];

    // protected $connection = 'legacy_db';

    public function user()
    {
        return $this->belongsTo(User::class);

        // $this->belongsToMany()
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($post) {
    //         // logic before creating a post
    //     });

    //     static::created(function ($post) {
    //         // logic after a post has been created
    //     });

    //     static::updating(function ($post) {
    //         // logic before updating a post
    //     });

    //     static::deleting(function ($post) {
    //         // logic before deleting a post
    //     });

    //     static::deleted(function ($post) {
    //         // logic after a post has been deleted
    //     });
    // }
}
