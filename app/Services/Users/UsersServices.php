<?php

namespace App\Services\Users;

use App\Models\User;
use App\Repository\Eloquent\UserRepository;
use RuntimeException;

class UsersServices{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
       $this->userRepository = $userRepository;
    }

    public function register($request)
    {
        // Check if user already exists
        $existingUser = $this->userRepository->findByEmail($request['email']);
        if ($existingUser) {
            throw new RuntimeException('Email already exists');
        }
        // Generate password hash
        $request['password'] = password_hash($request['password'], PASSWORD_DEFAULT);
        return $this->userRepository->store($request);
    }

}
