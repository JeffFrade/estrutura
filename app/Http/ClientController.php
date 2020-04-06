<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Services\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        $clients = $this->client->index();

        return view('clients.index', compact('clients'));
    }
}
