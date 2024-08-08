<?php

namespace App\Console\Commands;

use Elastic\Elasticsearch\ClientBuilder;
use http\Message\Body;
use Illuminate\Console\Command;

class CreateElasticsearchIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elasticsearch:create-index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Elasticsearch index for products';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $client = ClientBuilder::create()->build();

        $params = [
            'index' => 'products',
            'body' => [
                'settings' => [
                    'number_of_shards' => 1,
                    'number_of_replicas' => 0,
                ],
                'mappings' => [
                    'properties' => [
                        'name' => ['type' => 'text'],
                        'short_description' => ['type' => 'text'],
                        'price' => ['type' => 'float'],
                        'stock' => ['type' => 'integer'],
                        'created_at' => ['type' => 'date'],
                    ]
                ]
            ]
        ];

        try {
            $client->indices()->create($params);
            $this->info('Elasticsearch index created successfully!');
        }catch (\Exception $e){
            $this->error('Error creating Elasticsearch index: ' . $e->getMessage());
        }

    }
}
