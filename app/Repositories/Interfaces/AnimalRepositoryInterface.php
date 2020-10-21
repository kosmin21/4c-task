<?php

namespace App\Repositories\Interfaces;

interface AnimalRepositoryInterface
{
    public function all();

    public function getByName(string $query);

    public function getById(int $id);

    public function saveFromExternalApi(array $matches);
}
