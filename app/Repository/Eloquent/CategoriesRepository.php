<?php

namespace App\Repository\Eloquent;

use App\Models\Categories;
use App\Repository\CategoriesRepositoryInterface;

class CategoriesRepository extends BaseRepository implements CategoriesRepositoryInterface
{
    public $model;

    public function __construct(Categories $model)
    {
        parent::__construct($model);
    }

}
