<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Foundation\Http\FormRequest;
// use App\Http\Requests\TestLoginRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;


class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    // use LoginRequest;
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function login(LoginRequest $request)
    {
        $emailRequest = mb_strtolower($request->get('email'), 'UTF-8');
        if (User::where('email', $emailRequest)->count() == 0) {
            return response()->json([
                'errors' => 
                    ['email' => ['email không tồn tại']]
                
            ], 401);
        }

        if (!$token = auth()->attempt($request->validated())) {
            return response()->json(['errors' => ['Tài khoản hoặc mật khẩu không chính xác']], 401);
        }

        $newToken = $this->createNewToken($token);
        return response()->json($newToken);
    }

    public function register(RegisterUserRequest $request)
    {
        $user = User::create(array_merge(
            $request->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'status' => 'ok',
            'message' => 'Đăng ký tài khoản thành công',
            'data' => $user
        ], 201);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:8',
            'new_password' => 'required|string|confirmed|min:8',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return response()->json([
                'status' => 'error',
                'old_password' => 'mật khẩu hiện tại không chính xác',
            ], 401);
        }


        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->update(
            ['password' => bcrypt($request->new_password)]
        );

        return response()->json([
            'message' => 'Đã đổi mật khẩu thành công',
            'user' => $user,
        ], 201);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
