<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreCheckListRequest;
use App\Http\Requests\UpdateCheckListRequest;
use App\Models\CheckList;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\API\BaseController as BaseController;

class CheckListController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $checklists = auth()->user()->checklist;

        if (auth()->user())
            return $this->sendResponse($checklists, 'Successfully');

        return $this->sendError('Access denied', 'Login first', 403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCheckListRequest $request
     * @return JsonResponse
     */
    public function store(StoreCheckListRequest $request): JsonResponse
    {
        if (!Gate::allows('store-checklist'))
            return $this->sendError('Access denied', 'You have reached your limit of checklists', 403);

        $store = auth()->user()->checklist()->saveMany($request->validated());

        return $this->sendResponse($store, 'Successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param $checkList
     * @return JsonResponse
     */
    public function show($checkList): JsonResponse
    {
        return $this->sendResponse(CheckList::findOrFail($checkList), 'Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCheckListRequest $request
     * @param $checklist
     * @return JsonResponse
     */
    public function update(UpdateCheckListRequest $request, $checklist): JsonResponse
    {
        $update = CheckList::find($checklist)->update($request->validated());

        return $this->sendResponse($update, 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $checklist
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy($checklist): JsonResponse
    {
        $items = explode(',', $checklist);

        foreach ($items as $item)
            $delete = CheckList::find($item)->delete();

        return $this->sendResponse($delete, 'Successfully deleted');
    }
}
