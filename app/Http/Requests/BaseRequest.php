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
            'reset'     => '',
            'sent'      => '',
            'throttled' => '',
            'token'     => '',
            'user'      => '',
            'auth'      => [
                'failed'    => '',
                'password'  => '',
                'throttle'  => '',
            ],
            'failedKey' => '',

            'reset1'     => '',
            'sent1'      => '',
            'throttled1' => '',
            'token1'     => '',
            'user1'      => '',
            'auth1'      => [
                'failed'    => '',
                'password'  => '',
                'throttle'  => '',
            ],
            'failedKey1' => '',
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
            'reset2'     => __('passwords.reset'),
            'sent2'      => __('passwords.sent'),
            'throttled2' => __('passwords.throttled'),
            'token2'     => __('passwords.token'),
            'user2'      => __('passwords.user'),
            'auth2'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey2' => __('nothing.key'),
            'reset3'     => __('passwords.reset'),
            'sent3'      => __('passwords.sent'),
            'throttled3' => __('passwords.throttled'),
            'token3'     => __('passwords.token'),
            'user3'      => __('passwords.user'),
            'auth3'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey3' => __('nothing.key'),
            'reset4'     => __('passwords.reset'),
            'sent4'      => __('passwords.sent'),
            'throttled4' => __('passwords.throttled'),
            'token4'     => __('passwords.token'),
            'user4'      => __('passwords.user'),
            'auth4'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey4' => __('nothing.key'),
            'reset5'     => __('passwords.reset'),
            'sent5'      => __('passwords.sent'),
            'throttled5' => __('passwords.throttled'),
            'token5'     => __('passwords.token'),
            'user5'      => __('passwords.user'),
            'auth5'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey5' => __('nothing.key'),
            'reset6'     => __('passwords.reset'),
            'sent6'      => __('passwords.sent'),
            'throttled6' => __('passwords.throttled'),
            'token6'     => __('passwords.token'),
            'user6'      => __('passwords.user'),
            'auth6'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey6' => __('nothing.key'),
            'reset7'     => __('passwords.reset'),
            'sent7'      => __('passwords.sent'),
            'throttled7' => __('passwords.throttled'),
            'token7'     => __('passwords.token'),
            'user7'      => __('passwords.user'),
            'auth7'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey7' => __('nothing.key'),
            'reset8'     => __('passwords.reset'),
            'sent8'      => __('passwords.sent'),
            'throttled8' => __('passwords.throttled'),
            'token8'     => __('passwords.token'),
            'user8'      => __('passwords.user'),
            'auth8'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey8' => __('nothing.key'),

            'reset9'     => __('passwords.reset'),
            'sent9'      => __('passwords.sent'),
            'throttled9' => __('passwords.throttled'),
            'token9'     => __('passwords.token'),
            'user9'      => __('passwords.user'),
            'auth9'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey9' => __('nothing.key'),

            'reset10'     => __('passwords.reset'),
            'sent10'      => __('passwords.sent'),
            'throttled10' => __('passwords.throttled'),
            'token10'     => __('passwords.token'),
            'user10'      => __('passwords.user'),
            'auth10'      => [
                'failed'    => __('auth.failed'),
                'password'  => __('auth.password'),
                'throttle'  => __('auth.throttle'),
            ],
            'failedKey10' => __('nothing.key'),

        ];
    }
}
