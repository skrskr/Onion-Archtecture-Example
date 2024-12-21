<?php

namespace App\Presentation\Http\Controllers;

use App\Application\Services\AuthService;
use App\Presentation\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function __construct(private AuthService $authService)
    {}


    public function login(LoginRequest $request)
    {
        $result =  $this->authService->handle($request);
        return response()->json([
            'data' => $result
        ]);
    }
}
