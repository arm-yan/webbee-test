<?php

namespace App\Http\Resources;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuCollectionResource extends ResourceCollection
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

        /** @var MenuItem $item */
        foreach ($this->collection as $item) {
            $result[] = new MenuResource($item);
        }

        return $result;
    }
}
