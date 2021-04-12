<?php


namespace App\Repository;


use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostRepository
{
    public function create($user_id, $body): int
    {
        return Post::create([
            'user_id' => $user_id,
            'body' => $body,
        ])->id;
    }

    public function findAll(): Collection
    {
        return Post::all();
    }

    public function update(int $id, string $body): Post
    {
        $post = Post::find($id)->fill([
            'id' => $id,
            'post' => $body
        ]);
        $post->save();

        return $post;
    }
}
