<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    /**
     * Default password to register when password is not setted or provided
     */

    'default_password'  => 'password',

    /**
     * User configuration
     */
    'user'      => [
        'model'     => App\Models\User::class,
        'slug'      => 'user',
        'table'     => [
            'name'          => env('CUSTOM_USER_USERS_DATABASE_TABLE', 'users'),
            'primary_key'   => env('CUSTOM_USER_USERS_DATABASE_TABLE_PRIMARY_KEY', 'id'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attributes or columns you can add to customize your users table
    |--------------------------------------------------------------------------
    */

    'attributes'    => [
        /**
         * Important attributes that can almostly required
         */

        'name'          => [
            /**
             * You can set user's name attribute as optional
             */
            'optional'  => false,
        ],

        'first_name'    => [
            'enabled'   => true,
        ],

        'username'      => [
            'enabled'   => true,
        ],

        'phone_number'  => [
            'enabled'   => true,
        ],

        /**
         * Extra attributes which are optional
         */

        'extra'         => [

            'agree_with_policy_and_terms'    => [
                'enabled'   => true,
                'name'      => 'has_agreed_with_policy_and_terms_at',
                'type'      => 'timestamp'
            ],

            'last_login'    => [
                'enabled'   => true,
                'name'      => 'last_login_at',
                'type'      => 'string'
            ],

            'gender'    => [
                'enabled'   => true,
                'name'      => 'gender',
                'type'      => 'string'
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password history config
    |--------------------------------------------------------------------------
    */
    'password_history'      => [
        'enabled'           => true,
        'checker'           => false,
        'number_to_check'   => 3,
    ],

    /*
    |--------------------------------------------------------------------------
    | Add uuid support
    |--------------------------------------------------------------------------
    */

    'uuids'     => [
        'enabled'   => true,
        'column'    => '_id'
    ],
];