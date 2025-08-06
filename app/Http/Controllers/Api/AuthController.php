<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Responses\ApiResponse;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $user = User::withTrashed()->where('email', $request->email)->first();

            if ($user && $user->trashed()) {
                return ApiResponse::error('Account has been deleted', 403);
            }

            if (!Auth::attempt($request->only('email', 'password'))) {
                return ApiResponse::error('User Unauthorized', 401);
            }

            $user = User::where('id', Auth::id())->first();

            if (!$user->is_active) {
                return ApiResponse::error('Account is inactive', 403);
            }

            $token = $user->createToken('token')->plainTextToken;

            return ApiResponse::success('User Authorized', 200, [
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return ApiResponse::error('Login failed', 500, [
                'error' => $e->getMessage()
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ApiResponse::success('User logged out successfully', 200);
    }
}
