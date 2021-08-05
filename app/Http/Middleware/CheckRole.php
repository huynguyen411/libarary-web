<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $payload = auth()->payload();
        // $codeRole = $payload->get('code_role');
        // if($codeRole[0] == 'U') {
        //     return response()->json([
        //         ['error' => 'Unauthorized'],
        //     ], 401);
        // }

        $payload = auth()->payload();
        $roleId = $payload->get('role_id');
        $codeRole = Role::where('role_id', $roleId)->value('code');
        if ($codeRole[0] == 'U') {
            return response()->json([
                [
                    'error' => 'Unauthorized',
                    // 'code' => $payload,
                    // 'role_id' => $roleId,
                    // 'codeRole' => $codeRole
                ],
            ], 401);
        }
        return $next($request);
    }
}
