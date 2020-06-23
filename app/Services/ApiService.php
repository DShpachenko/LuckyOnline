<?php

namespace App\Services;

use App\Repositories\LoggerRepository;

/**
 * Class ApiService
 * @package App\Services
 */
class ApiService
{
    /**
     * @var LoggerRepository
     */
    public $repository;

    /**
     * ApiService constructor.
     * @param LoggerRepository $repository
     */
    public function __construct(LoggerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Получение списка посетителей.
     *
     * @param $data
     * @return int|null
     */
    public function getCountSurfers($data): ? int
    {
        return $this->repository->getCountSurfers($data['from'], $data['to']);
    }
}
