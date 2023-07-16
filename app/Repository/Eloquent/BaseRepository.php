<?php

namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Collection;
use \Exception;


class BaseRepository implements EloquentRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->all();
    }

    public function find($id) : ?Model
    {
        return $this->model->find($id);
    }

    public function store(Array $attributes)
    {
        return $this->model->insert($attributes);
    }

    public function update(String $id, Array $attributes) : Model
    {
        $user = $this->model->find($id);
        return $user->update($attributes);
    }

    public function delete(String $id)
    {
        $user = $this->model->find($id);
        return $user->delete();
    }
}
