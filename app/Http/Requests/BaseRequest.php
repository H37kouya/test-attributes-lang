<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function attributes()
    {
        return [
            'reset'     => __('passwords.reset'),
            'sent'      => __('passwords.sent'),
            'throttled' => __('passwords.throttled'),
            'token'     => __('passwords.token'),
            'user'      => __('passwords.user'),
            'auth'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey' => __('nothing.key'),
        ];
    }
}
