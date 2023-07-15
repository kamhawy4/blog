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

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);
        $username = $request->input('username');
        $password = $request->input('password');

        $this->userService->register($username, $password);

        return response()->json(['message' => 'User registered successfully']);
    }

    public function store()
    {
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect('/users');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect('/users');
    }
}
