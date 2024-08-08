<?php

namespace App\Console\Commands;

use App\Models\Product;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Console\Command;

class IndexProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elasticsearch:index-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index products from the database into Elasticsearch';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $client=ClientBuilder::create()->build();
        $products=Product::all();

        foreach ($products as $product){

            $params=[
                'index'=>'products',
                'id'=>$product->id,
                'body'=>[
                    'name'=>$product->name,
                    'short_description'=>$product->short_description,
                    'price'=>$product->price,
                    'stock'=>$product->stock,
                    'created_at'=>$product->created_at
                ]
            ];
            $client->index($params);
        }
        $this->info('Products indexed successfully!');
    }
}
