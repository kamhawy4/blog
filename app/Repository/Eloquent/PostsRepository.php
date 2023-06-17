<?php

namespace App\Repository\Eloquent;

use App\Models\Posts;
use App\Repository\PostsRepositoryInterface;

class PostsRepository extends BaseRepository implements PostsRepositoryInterface
{
    public $model;

    public function __construct(Posts $model)
    {
        parent::__construct($model);
    }

}
