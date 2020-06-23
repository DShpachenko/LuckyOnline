<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Logger
 * @package App\Models
 */
class Logger extends Model
{
    /**
     * Пришел на сайт.
     */
    public const STATUS_HAS_COME = 1;

    /**
     * Ушел с сайта.
     */
    public const STATUS_HAS_GONE = 2;

    /**
     * @var string[]
     */
    protected $fillable = [
        'date',
        'status',
    ];

    /**
     * @var string
     */
    protected $table = 'logger';
}
