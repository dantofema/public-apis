<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    public function index(): string
    {

        $client = Services::curlrequest([
            'baseURI' => 'https://api.publicapis.org',
        ]);
        $response = $client->get('/entries');

        $entries = [];
        
        if ($response->getStatusCode() == 200) {
            $entries = json_decode($response->getBody())->entries;
        }


        return view('welcome_message', ['entries' => $entries]);
    }
}
