<?php

namespace App\Repository\Eloquent;

use App\Models\Event;
use App\Repository\EventRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{

    /**
     * EventRepository constructor.
     *
     * @param Event $model
     */
    public function __construct(Event $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find($id): ?Model
    {
        return $this->model->query()->where('id',$id)->first();
    }
}
