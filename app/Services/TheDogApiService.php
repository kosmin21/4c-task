<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Log;
use Psr\Http\Message\StreamInterface;

class TheDogApiService
{
    private string $base_url = 'https://api.thedogapi.com';
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $query
     * @return array|StreamInterface
     */
    public function getMatches(string $query)
    {
        $uri = $this->base_url . '/v1/breeds/search';
        $params = [
            'headers' => ['X-Api-Key' => config('DOG_API_KEY')],
            'query' => ['q' => $query]
        ];

        try {
            $response = $this->client->request('GET', $uri, $params);
            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            Log::error('Failed to complete request to external Dog Api.');
        }

        return [];
    }
}
