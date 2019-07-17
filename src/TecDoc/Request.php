<?php

namespace TecDoc;

use GuzzleHttp\Client;
use TecDoc\Model\AbstractRequest;

class Request
{
    protected $endpoint = 'https://webservice.tecalliance.services/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint';
    protected $client;


    public function __construct($providerId, $apiKey)
    {
        $this->client = new Client();
    }

    public function articleSearch($number)
    {
        $request = new \TecDoc\Model\ArticleSearch\Request();

        return $this->serializeAndSubmitRequest($request, \TecDoc\Model\ArticleSearch\Response::class);
    }

    protected function serializeAndSubmitRequest(AbstractRequest $request, $type)
    {
        $response = $this->client->post($this->endpoint, [
            'query' => [
                'api_key' => '2BeBXg6Bim3jGwr5LbrPQNPPWUg1tSXGrVPzixzY3CRzmw6ta4NC'
            ],
            'body' => ''
        ]);
    }
}
