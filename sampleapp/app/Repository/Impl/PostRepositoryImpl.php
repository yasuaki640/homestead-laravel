<?php
declare(strict_types=1);

namespace App\Repository\Impl;


use App\Models\Post;
use App\Repository\PostRepository;
use Illuminate\Database\Eloquent\Collection;

class PostRepositoryImpl implements PostRepository
{

    public function store(array $req): int
    {
        // TODO: Implement store() method.
    }

    public function findById(int $id): ?Post
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    public function update(array $req): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
