<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface{

    public function all();

    public function find($id): ?Model;

    public function create(array $attributes): Model;

    public function update(String $id, Array $attributes) : Model;

    public function delete(String $id) : Model;
}
