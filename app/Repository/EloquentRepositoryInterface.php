<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface{

    public function index();

    public function find($id): ?Model;

    public function store(array $attributes);

    public function update(String $id, Array $attributes) : Model;

    public function delete(String $id) : Model;
}
