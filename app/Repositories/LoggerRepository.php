<?php

namespace App\Repositories;

use App\Models\Logger;

/**
 * Class LoggerRepository
 * @package App\Repositories
 */
class LoggerRepository extends Repository
{
    /**
     * Model name.
     *
     * @return mixed|string
     */
    function model(): string
    {
        return Logger::class;
    }

    /**
     * @param $from
     * @param $to
     * @return int|null
     */
    public function getCountSurfers($from, $to): ? int
    {
        return $this->model
            ->where('date', '>', $from)
            ->where('date', '<', $to)
            ->where('status', Logger::STATUS_HAS_COME)
            ->count();
    }
}
