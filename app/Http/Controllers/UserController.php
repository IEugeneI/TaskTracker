<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\User;


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
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->user::all();
    }

    /**
     * @param $user
     * @return mixed
     */
    public function show($user)
    {
        return $this->user::find($user);
    }

    /**
     * @param UserCreateRequest $request
     * @return mixed
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->user::create($request->all());
        return $user;
    }

    /**
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
