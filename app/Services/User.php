<?php

namespace App\Services;

use App\Repositories\Models\User as MUser;
use App\Repositories\UserRepository;

class User
{
    private $userRepository;
    private $mUser;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->mUser = new MUser();
    }
}
