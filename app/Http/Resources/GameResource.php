<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'blocks' => $this->blocks->map(function($item) {
                return new BlockResource($item);
            }),
            'obstacleCount' => $this->obstacleCount,
            'gameState' => $this->getPlayingState()
        ];
    }
}
