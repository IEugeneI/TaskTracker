<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\User;

/**
 * @group User
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    protected $user;

    /**
     * UserController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Show all users
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->user::all();
    }

    /**
     * Show user by id
     * @urlParam id required The ID of the user.
     * @param $user
     * @return mixed
     */
    public function show($user)
    {
        return $this->user::find($user);
    }

    /**
     * Create a user
     * @bodyParam first_name string required  The name of user. Example: Valera
     * @bodyParam last_name string required The last name of the user. Example: Petrov
     * @bodyParam email email required unique The email of the user. Example: Petrov@gmail.com
     * @param UserCreateRequest $request
     * @return
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->user::create($request->all());
        return $user;
    }

    /**
     * Update user
     * @urlParam id required The ID of the user.
     * @bodyParam first_name string required  The name of user. Example: 9
     * @bodyParam last_name string required The last name of the user. Example: Valera
     * @bodyParam email email required unique The email of the user. Example: Petrov
     * @param UserCreateRequest $request
     * @param $id
     * @return string
     */
    public function update(UserCreateRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $user->fill($request->all())->save();
        return 'User successfully updated';
    }

    /**
     * Delete user
     * @urlParam id required The ID of the user.
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $user = $this->user::find($id);
        $user->delete();
        return 'User successful deleted!';
    }

}
