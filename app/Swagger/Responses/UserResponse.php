<?php

namespace App\Swagger\Responses;

use OpenApi\Attributes as OA;

#[OA\Response(
    response: 'UserResponse',
    description: 'User details',
    content: new OA\JsonContent(
        properties: [
            new OA\Property(property: 'user', ref: '#/components/schemas/User'),
        ],
        type: 'object',
    )
)]
class UserResponse
{
}
