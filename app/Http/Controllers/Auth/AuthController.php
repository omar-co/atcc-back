<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DownloadTracking;
use App\Models\User;
use App\Services\JsonService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{

    /**
     * @var JsonService
     */
    private $jsonService;

    public function __construct(JsonService $jsonService) {

        $this->jsonService = $jsonService;
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login(): JsonResponse {
        $credentials = request(['email', 'password']);

        if ((! $token = auth()->attempt($credentials)) || (!auth()->user()->isActive())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse {
        /** @var User $user */
        $user = auth()->user();

        /** @var DownloadTracking $data */
        $data = $this->jsonService->hasDT($user);
        $value = null;
        if ($data) {
            $json = $data->jsons->last();
            if ($json) {
                $value = json_decode($json->content);
            } else {
                $value = false;
            }

        }
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'has_data' => ($data && $value) && $data->active ,
            'ramo' => $value ? $value->ramo : null,
            'programa' => ($value && $value->programa) ? $value->programa : null,
            'directamente' => $value ? $value->directamente : null,
            'modalidad' => $value ? $value->modalidad : null,
            'mode' => $user->getRoleName()
        ]);
    }
}
