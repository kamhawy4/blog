<?php

namespace App\Repository\Eloquent;

use App\Models\Comments;
use App\Repository\CommentsRepositoryInterface;

class CommentsRepository extends BaseRepository implements CommentsRepositoryInterface
{
    public $model;

    public function __construct(Comments $model)
    {
        parent::__construct($model);
    }

}
