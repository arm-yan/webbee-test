<?php
namespace App\Repository;

use Illuminate\Support\Collection;

interface MenuRepositoryInterface
{
    public function allRoots(): Collection;
}
