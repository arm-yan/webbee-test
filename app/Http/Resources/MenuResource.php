<?php

namespace App\Http\Resources;

use App\Models\Event;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use LogicException;

class MenuResource extends JsonResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        if (!$this->resource instanceof MenuItem) {
            throw new LogicException('Invalid resource usage');
        }

        $menu = $this->resource->toArray();
        $menu['children'] = new MenuCollectionResource($this->resource->childrens);

        return $menu;
    }
}
