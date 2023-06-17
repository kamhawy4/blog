<?php

namespace App\Http\Controllers\APi\Users;

use App\Http\Controllers\Controller;
use App\Repository\UserRepositoryInterface;

class UsersController extends Controller
{

    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return  $this->userRepository->all();
    }

    public function getById($id)
    {
        return $this->userRepository->find($id);
    }


}
