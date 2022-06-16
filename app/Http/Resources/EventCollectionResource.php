<?php

namespace App\Http\Resources;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EventCollectionResource extends ResourceCollection
{
    public static $wrap = false;

    /**
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        $result = [];

        /** @var Event $item */
        foreach ($this->collection as $item) {
            $result[] = new EventResource($item);
        }

        return $result;
    }
}
