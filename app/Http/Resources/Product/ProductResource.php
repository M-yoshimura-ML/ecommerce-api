<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        //※single detail
        // return [
        //     'name' => $this->name,
        //     'description' => $this->detail,
        //     'price' => $this->price,
        //     'stock' => $this->stock ==0 ? 'Out of stock': $this->stock,
        //     'discount' => $this->discount,
        //     'total_price' => round($this->price * (1 - ($this->discount/100)), 0),
        //     'rating' =>$this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count(), 1) : 'No rating',
        //     'href' => [
        //         'reviews' => route('reviews.index', $this->id)
        //     ]
        // ];

        return [
            'name' => $this->name,
            //'description' => $this->detail,
            //'price' => $this->price,
            //'stock' => $this->stock ==0 ? 'Out of stock': $this->stock,
            //'discount' => $this->discount,
            'total_price' => round($this->price * (1 - ($this->discount/100)), 0),
            'rating' =>$this->reviews->count()>0 ? round($this->reviews->sum('star')/$this->reviews->count(), 1) : 'No rating',
            'href' => [
                'reviews' => route('products.show', $this->id)
            ]
        ];
    }
}
