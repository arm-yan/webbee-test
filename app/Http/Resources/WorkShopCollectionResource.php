<?php

namespace App\Http\Resources;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class WorkShopCollectionResource extends ResourceCollection
{
    /**
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        $result = [];

        /** @var Workshop $item */
        foreach ($this->collection as $item) {
            $result[] = new WorkShopResource($item);
        }

        return $result;
    }
}
