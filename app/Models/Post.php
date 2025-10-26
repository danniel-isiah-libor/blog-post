<?php

namespace App\Models;

use App\Policies\PostPolicy;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Attributes\UsePolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[UsePolicy(PostPolicy::class)]
// #[ObservedBy(PostObserver::class)]
class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class);

        // $this->belongsToMany()
    }
}
