<?php
namespace App\Repositories;
use App\Models\Post;
use App\Models\User;
use App\Repositories\Interfaces\BlogRepositoryInterface;
class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }
    public function getByUser(User $user)
    {
        return Post::where('user_id'. $user->id)->get();
    }
}
