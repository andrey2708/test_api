<?php

namespace App\Services;


use App\Models\User;
use App\Services\Entity\EntityService;

class UserService
{

    private EntityService $entityService;

    public function __construct()
    {
        $this->entityService = new EntityService(User::class);
    }

    public function getAll($str = null){
        return $this->entityService->getAll($str);
    }

    public function createUser(array $parameters){
        return $this->entityService->createUser($parameters);
    }

}
