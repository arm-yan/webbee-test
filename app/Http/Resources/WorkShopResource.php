<?php

namespace App\Http\Resources;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use LogicException;

class WorkShopResource extends JsonResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        if (!$this->resource instanceof Workshop) {
            throw new LogicException('Invalid resource usage');
        }

        return $this->resource->toArray();
    }
}
