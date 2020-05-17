<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskChangeStatusRequest;
use App\Http\Requests\TaskChangeUserRequest;
use App\Http\Requests\TaskCreateRequest;
use App\Task;

/**
 * @group Tasks
 *
 * APIs for managing tasks
 */
class TaskController extends Controller
{
    protected $task;


    /**
     * TaskController constructor.
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Show all tasks
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->task::all();
    }

    /**
     * Show task by id
     * @urlParam id required The ID of the task.
     * @param $task
     * @return mixed
     */
    public function show($task)
    {
        return $this->task::find($task);
    }

    /**
     * Create task
     * @bodyParam title string required max:50  The title of task. Example: Front Fix
     * @bodyParam description string required max:255 The description of the task. Example: Fix footer button
     * @bodyParam status email required max:255 The status of the task. Example: Done(View/In Progress)
     * @bodyParam user_id integer   The user_id who doing task. Example: 1
     * @param TaskCreateRequest $request
     * @return mixed
     */
    public function store(TaskCreateRequest $request)
    {
        $task = $this->task::create($request->all());
        return $task;
    }

    /**
     * Update Task
     * @urlParam id required The ID of the task.
     * @bodyParam title string required max:50  The title of task. Example: Front Fix
     * @bodyParam description string required max:255 The description of the task. Example: Fix footer button
     * @bodyParam status email required max:255 The status of the task. Example: Done(View/In Progress)
     * @bodyParam user_id integer   The user_id who doing task. Example: 1
     * @param TaskCreateRequest $request
     * @param $id
     * @return string
     */
    public function update(TaskCreateRequest $request, $id)
    {
        $task = $this->task->findOrFail($id);
        $task->fill($request->all())->save();
        return 'Your task successfully updated';
    }

    /**
     * Delete task
     * @urlParam id required The ID of the task.
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $task = $this->task::find($id);
        $task->delete();
        return 'Task successful deleted!';
    }

    /**
     * Get all tasks for status(Done,View,In Progress)
     * @urlParam status required The status(View/Done/In Progress)  of the task.
     * @param $status
     * @return mixed
     */
    public function getTasksForStatus($status)
    {
        return $this->task::where('status', $status)->get();
    }

    /**
     * Change task status by id
     * @urlParam id required The id of the task.
     * @bodyParam status required required max:15  The status(View/Done/In Progress)  of the task.
     * @param TaskChangeStatusRequest $request
     * @param $id
     * @return mixed
     */
    public function changeTaskStatus(TaskChangeStatusRequest $request, $id)
    {
        $task = $this->task::where('id', $id)->first();
        $task->status = $request->status;
        $task->save();
        return $task;
    }

    /**
     * Change user for task
     * @bodyParam id integer required   The id of task. Example: 1
     * @bodyParam user_id integer required  The id of the user. Example: 2
     * @param TaskChangeUserRequest $request
     * @param $id
     * @return mixed
     */
    public function changeUser(TaskChangeUserRequest $request)
    {
        $task = $this->task::where('id', $request->id)->first();
        $task->user_id = $request->user_id;
        $task->save();
        return $task;
    }
}
