<?php
namespace App\Repository;

use Illuminate\Support\Collection;

interface EventRepositoryInterface
{
    public function all(): Collection;
}
