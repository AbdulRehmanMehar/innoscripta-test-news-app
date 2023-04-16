<?php

namespace App\Jobs\Crawlers\News;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TheGuardian
{

    private $client = null;
    private $apiKey = null;
    private $headlinesURL = null;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config('news.NYTIMES_APIKEY');
        $this->headlinesURL = 'https://api.nytimes.com/svc/search/v2/articlesearch.json';
    }

    public function fetch()
    {
        try {
            $res = $this->client->request('GET', "{$this->headlinesURL}?api-key={$this->apiKey}");
            return $res->getBody();
        } catch (ClientException $e) {
            return [];
        }
    }

}
