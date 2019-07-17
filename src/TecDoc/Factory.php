<?php

namespace TecDoc;

class Factory
{
    public function createRequest(array $credentials)
    {
        return new Request(
            $credentials['providerId'],
            $credentials['apiKey']
        );
    }
}
