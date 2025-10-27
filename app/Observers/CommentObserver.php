<?php

namespace App\Observers;

use App\Models\Comment;
use App\Notifications\CommentNotification;
use Filament\Notifications\Notification;

class CommentObserver
{
    /**
     * Handle the Comment "created" event.
     */
    public function created(Comment $comment): void
    {
        $user = $comment->commentable->user;
        $post = $comment->commentable;

        // $user->notify(new CommentNotification($user, $post));

        Notification::make()
            ->title('New comment')
            ->body("A new comment has been added to your post: {$post->title}")
            ->success()
            ->sendToDatabase($user);
    }

    /**
     * Handle the Comment "updated" event.
     */
    public function updated(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "deleted" event.
     */
    public function deleted(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "restored" event.
     */
    public function restored(Comment $comment): void
    {
        //
    }

    /**
     * Handle the Comment "force deleted" event.
     */
    public function forceDeleted(Comment $comment): void
    {
        //
    }
}
