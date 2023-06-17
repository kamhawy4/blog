<?php

namespace App\Repository\Eloquent;

use App\Models\Tags;
use App\Repository\TagsRepositoryInterface;

class TagsRepository extends BaseRepository implements TagsRepositoryInterface
{
    public $model;

    public function __construct(Tags $model)
    {
        parent::__construct($model);
    }

}
