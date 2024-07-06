<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

    /**
     *
     *  @OA\Info(
     *      version="1.0.0",
     *      title="Portfolio API",
     *      description="API for portfolio",
     *      @OA\Contact(email="roberta@rezza.com")
     *  )
     *
     *  @OA\Server(url=L5_SWAGGER_CONST_HOST)
     *
     */
    
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
