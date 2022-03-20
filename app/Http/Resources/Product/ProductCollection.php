<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        // return [
        //     'name' => $this->name,
        //     'total_price' => round($this->price * (1 - ($this->discount/100)), 0),
        //     'rating' =>$this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count(), 1) : 'No rating',
        //     'href' => [
        //         'link' => route('products.show', $this->id)
        //     ]
        // ];

        return [
            'data' => $this->collection
        ];
    }
}
