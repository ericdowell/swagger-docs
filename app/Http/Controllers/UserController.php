<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class UserController extends Controller
{

    #[OA\Get(
        path: '/api/users/me',
        operationId: 'currentUser',
        description: 'Retrieves the currently authenticated user\'s profile information, including their avatar and other details.',
        summary: 'Get the currently authenticated user',
        security: [['sanctum' => []]],
        tags: ['User'],
        responses: [
            new OA\Response(
                ref: '#/components/responses/UserResponse',
                response: 200,
            ),
        ]
    )]
    public function me(Request $request): JsonResponse
    {
        $user = $request->user();

        return response()->json(compact('user'));
    }
}
