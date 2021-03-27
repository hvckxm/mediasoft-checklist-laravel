<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\CheckList;
use App\Models\Task;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\API\BaseController as BaseController;

class TaskController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param CheckList $checklist
     * @return JsonResponse
     */
    public function index(CheckList $checklist): JsonResponse
    {
        if(empty($checklist))
            return $this->sendError('Not found', $checklist);

        $tasks = $checklist->tasks;

        if($checklist->user_id == auth()->user()->id)
            return $this->sendResponse($tasks, 'Successfully');

        return $this->sendError('','Access denied', 403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CheckList $checklist
     * @param StoreTaskRequest $request
     * @return JsonResponse
     */
    public function store(CheckList $checklist, StoreTaskRequest $request): JsonResponse
    {
        if(!Gate::allows('store-task', $checklist->id))
            return $this->sendError('Access denied','', 403);

        $create = $checklist->tasks()->create($request->validated());

        return $this->sendResponse($create, 'Successfully created a task');
    }

    /**
     * Display the specified resource.
     *
     * @param CheckList $checklist
     * @param Task $task
     * @return JsonResponse
     */
    public function show(CheckList $checklist, Task $task): JsonResponse
    {
        return $this->sendResponse($task, 'Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CheckList $checklist
     * @param UpdateTaskRequest $request
     * @param Task $task
     * @return JsonResponse
     */
    public function update(CheckList $checklist, UpdateTaskRequest $request, Task $task): JsonResponse
    {
        $update = $task->update($request->validated());

        return $this->sendResponse($update, 'Successfully updated a task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CheckList $checklist
     * @param Task $task
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(CheckList $checklist, Task $task): JsonResponse
    {
        $destroy = $task->delete();

        return $this->sendResponse($destroy, 'Task has been deleted successfully');
    }
}
