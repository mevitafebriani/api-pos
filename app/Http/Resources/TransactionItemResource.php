<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'price' => (float)(string) $this->price,
            'quantity' => $this->quantity,
            'subtotal' => $this->subtotal,
            'product' => new ProductResource($this->whenLoaded('product')),
        ];
    }
}
