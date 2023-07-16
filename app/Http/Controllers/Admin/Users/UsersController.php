<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Users\UsersServices;

class UsersController extends Controller
{
    private $userService;

    public function __construct(UsersServices $userService)
    {
      $this->userService = $userService;
    }

}
