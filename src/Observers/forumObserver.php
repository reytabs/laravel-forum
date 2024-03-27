<?php

namespace TeamTeaTime\Forum\Observers;

use TeamTeaTime\Forum\Models\Post;
use Illuminate\Database\Eloquent\Observers\Observer;

class forumObserver
{
    public function created(Post $post)
    {

        // Logic to execute when a user is created
    }

}
