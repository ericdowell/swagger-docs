<?php

namespace App\Http\Controllers;


use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    description: 'Backend API documentation for Example.',
    title: 'Example API',
)]
#[OA\Server(
    url: L5_SWAGGER_CONST_HOST,
    description: 'API Server'
)]
#[OA\Components(
    securitySchemes: [
        new OA\SecurityScheme(
            securityScheme: 'sanctum',
            type: 'apiKey',
            name: 'Authorization',
            in: 'header'
        ),
    ]
)]
#[OA\Tag(name: 'Auth', description: 'Auth endpoints')]
#[OA\Tag(name: 'User', description: 'User endpoints')]
abstract class Controller
{
    //
}
