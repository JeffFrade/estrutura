<?php

namespace App\Services;

use App\Repositories\ClientRepository;
use App\Repositories\Models\Client as MClient;

class Client
{
    private $clientRepository;
    private $mClient;

    public function __construct()
    {
        $this->clientRepository = new ClientRepository();
        $this->mClient = new MClient();
    }

    public function index()
    {
        return $this->clientRepository->paginate(10);
    }
}
