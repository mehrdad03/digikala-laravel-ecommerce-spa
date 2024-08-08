<?php

namespace App\Listeners;

use App\Events\ProductChanged;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ProductIndexListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductChanged $event): void
    {
        $client = ClientBuilder::create()->build();

        $product = $event->product;

        if ($product->deleted_at) {
            $client->delete([
                'index' => 'products',
                'id' => $product->id,
            ]);
        }else{
            $client->index([
                'index' => 'products',
                'id'=>$product->id,
                'body'=>$product->toArray(),
            ]);
        }
    }
}
