<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Validation;

/**
 * Class CountSurfersRequest
 * @package App\Http\Requests\Api
 */
class CountSurfersRequest extends Validation
{
    /**
     * Список правил валидации.
     *
     * @return array|string[]
     */
    public function rules(): array
    {
        return [
            'from' => 'required|date_format:Y-m-d H:i:s',
            'to' => 'required|date_format:Y-m-d H:i:s',
        ];
    }

    /**
     * Возврат списка сообщений при валидации.
     *
     * @return array|string[]
     */
    public function messages(): array
    {
        return [
            'from.required' => __('validation.from_required'),
            'to.required' => __('validation.to_required'),
            'date_format' => __('validation.date_format'),
        ];
    }
}
