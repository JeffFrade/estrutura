<?php

namespace App\Repositories;

use App\Repositories\Models\Client;

class ClientRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Client();
    }
}
