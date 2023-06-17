<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'ndoe@example.com',
            'password' => bcrypt('password'),
        ];

        $user = User::create($userData);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($userData['name'], $user->name);
        $this->assertEquals($userData['email'], $user->email);
    }

//    public function testUpdateUser()
//    {
//        // Create a user
//        $user = User::factory()->create();
//
//        // New data for updating the user
//        $newData = [
//            'name' => 'Updated Name',
//            'email' => 'updated-email@example.com',
//        ];
//
//        $response = $this->put(route('users.update', $user), $newData);
//
//        // Assert that the response was successful
//        $response->assertStatus(302); // Assuming a redirect response
//
//        // Refresh the user data from the database
//        $user->refresh();
//        // Assert that the user's data has been updated
//        $this->assertEquals($newData['name'], $user->name);
//        $this->assertEquals($newData['email'], $user->email);
//
//    }
}
