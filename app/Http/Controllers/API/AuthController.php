<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;

class AuthController extends BaseController
{
    /**
     * Register new user through API
     *
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return $this->sendResponse($user, 'Successfully registered');
    }

    /**
     * Login through API
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->validated())) {
            return $this->sendError('Validation error', $request->validated());
        }

        $response['name'] = auth()->user()->name;
        $response['token'] = auth()->user()->createToken('API Token')->plainTextToken;

        return $this->sendResponse($response, 'Successfully logged');
    }
}
