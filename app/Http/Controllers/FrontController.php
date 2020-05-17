<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $tasks;
    protected $users;

    /**
     * FrontController constructor.
     * @param Task $task
     * @param User $user
     */
    public function __construct(Task $task, User $user)
    {
        $this->tasks = $task;
        $this->users = $user;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $tasks = $this->tasks::where('status', '!=', 'Done')->get();
        $users = $this->users->all();
        return view('welcome', compact('tasks', 'users'));
    }
}
