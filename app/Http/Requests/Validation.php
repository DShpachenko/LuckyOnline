<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;
use App\Exceptions\ValidationException;
use Illuminate\Http\Request;

/**
 * Валидация входящего запроса.
 *
 * Class Validation
 */
class Validation
{
    /**
     * Параметры запроса.
     *
     * @var array
     */
    public $params;

    /**
     * @var Request
     */
    protected $request;

    /**
     * Validation constructor.
     * @param Request $request
     * @throws ValidationException
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->prepareData();
        $this->make();
    }

    /**
     * Подготовка данных.
     */
    public function prepareData(): void
    {
        $this->params = $this->request->all();
    }

    /**
     * Запуск валидации.
     *
     * @throws ValidationException
     */
    public function make(): void
    {
        $rules = $this->rules();
        $messages = $this->messages();

        if (!$rules) {
            throw new ValidationException(__('errors.no_validation_rules'), ValidationException::EMPTY_VALIDATION_RULES);
        }

        if (!$messages) {
            throw new ValidationException(__('errors.no_validation_messages'), ValidationException::EMPTY_VALIDATION_MESSAGES);
        }

        $validator = Validator::make($this->params, $rules, $messages);

        if ($validator->fails()) {
            throw new ValidationException($validator->errors()->messages(), ValidationException::INVALID_PARAMS);
        }
    }

    /**
     * Список правил валидации.
     *
     * @return array
     */
    protected function rules(): ? array
    {
        return null;
    }

    /**
     * Список сообщений для валидации запроса.
     *
     * @return array
     */
    protected function messages(): ? array
    {
        return null;
    }
}
