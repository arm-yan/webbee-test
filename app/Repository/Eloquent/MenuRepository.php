<?php

namespace App\Repository\Eloquent;

use App\Models\MenuItem;
use App\Repository\MenuRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{

    /**
     * MenuRepository constructor.
     *
     * @param MenuItem $model
     */
    public function __construct(MenuItem $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function allRoots(): Collection
    {
        return $this->model->newQuery()->where('parent_id', NULL)->get();
    }

    public function find($id): ?Model
    {
        return $this->model->query()->where('id',$id)->first();
    }
}
