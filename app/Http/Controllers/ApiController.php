<?php

namespace App\Http\Controllers;

use App\Http\Requests\Api\CountSurfersRequest;
use App\Http\Resources\CountSurfersResponse;
use App\Services\ApiService;

/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{
    /**
     * @var ApiService
     */
    public $service;

    /**
     * ApiController constructor.
     * @param ApiService $service
     */
    public function __construct(ApiService $service)
    {
        $this->service = $service;
    }

    /**
     * @param CountSurfersRequest $request
     * @return CountSurfersResponse
     */
    public function countSurfers(CountSurfersRequest $request): ? CountSurfersResponse
    {
        return new CountSurfersResponse($this->service->getCountSurfers($request->params));
    }
}
