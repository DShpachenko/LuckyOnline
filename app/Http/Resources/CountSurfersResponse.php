<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CountSurfersResponse
 */
class CountSurfersResponse extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array|mixed
     */
    public function toArray($request)
    {
        return [
            'count_surfers' => $this->resource,
        ];
    }
}
