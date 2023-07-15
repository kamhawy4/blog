<?php

namespace App\Http\Controllers\APi\Users;

use App\Http\Controllers\Controller;
use App\Repository\UserRepositoryInterface;
use App\Services\Users\UsersServices;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    private $userRepository;
    private $userService;

    public function __construct(UsersServices $userService,UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }

    public function index()
    {
        return $this->userRepository->index();
    }


    public function store(Request $request)
    {
         $this->userService->register($request->all());
        return response()->json(['message' => 'User registered successfully']);
    }


}
