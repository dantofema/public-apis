<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{
    private ?\CodeIgniter\HTTP\CURLRequest $client;

    public function index(): string
    {

        $this->client();

        $request = request();
        $category = $request->getGet('category');

        if (is_null($category) || $category == 'all') {
            $response = $this->client->get('/entries');
        } else {
            $response = $this->client->get('/entries?category=' . $category);
        }

        $entries = [];

        if ($response->getStatusCode() == 200) {
            $entries = json_decode($response->getBody())->entries;
        }


        return view('welcome_message', [
            'entries' => $entries,
            'category' => $category,
            'categories' => $this->categories()
        ]);
    }


    public function client(): void
    {
        $this->client = Services::curlrequest([
            'baseURI' => 'https://api.publicapis.org',
        ]);
    }

    private function categories()
    {
        $response = $this->client->get('/categories');

        $categories = [];

        if ($response->getStatusCode() == 200) {
            $categories = json_decode($response->getBody())->categories;
        }

        return $categories;
    }
}
