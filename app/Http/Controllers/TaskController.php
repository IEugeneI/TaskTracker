<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskChangeStatusRequest;
use App\Http\Requests\TaskChangeUserRequest;
use App\Http\Requests\TaskCreateRequest;
use App\Task;


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
     * @return Task[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->task::all();
    }

    /**
     * @param $task
     * @return mixed
     */
    public function show($task)
    {
        return $this->task::find($task);
    }

    /**
     * @param TaskCreateRequest $request
     * @return mixed
     */
    public function store(TaskCreateRequest $request)
    {
        $task = $this->task::create($request->all());
        return $task;
    }

    /**
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
     * @param $status
     * @return mixed
     */
    public function getTasksForStatus($status)
    {
        return $this->task::where('status', $status)->get();
    }

    /**
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
