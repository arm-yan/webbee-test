<?php

namespace App\Http\Resources;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use LogicException;

class EventResource extends JsonResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        if (!$this->resource instanceof Event) {
            throw new LogicException('Invalid resource usage');
        }

        $event = $this->resource->toArray();
        $event['workshops'] = new WorkShopCollectionResource($this->resource->workshops);

        return $event;
    }
}
