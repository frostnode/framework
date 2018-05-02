<?php

return [
    'defaults'      => [
        'wrapper_class'       => 'field',
        'wrapper_error_class' => 'is-danger',
        'label_class'         => 'label',
        'field_class'         => 'input',
        'help_block_class'    => 'help',
        'error_class'         => 'help is-danger',
        'required_class'      => 'required',

        // Override a class from a field.
        'textarea'            => [
           'field_class'      => 'textarea',
        ],
        'file'                => [
            'field_class'     => 'file-input',
        ],
        //'text'                => [
        //    'wrapper_class'   => 'form-field-text',
        //    'label_class'     => 'form-field-text-label',
        //    'field_class'     => 'form-field-text-field',
        //]
        //'radio'               => [
        //    'choice_options'  => [
        //        'wrapper'     => ['class' => 'form-radio'],
        //        'label'       => ['class' => 'form-radio-label'],
        //        'field'       => ['class' => 'form-radio-field'],
        //],
    ],
    // Templates
    'form'          => 'laravel-form-builder::form',
    'text'          => 'laravel-form-builder::text',
    'textarea'      => 'laravel-form-builder::textarea',
    'button'        => 'laravel-form-builder::button',
    'buttongroup'   => 'laravel-form-builder::buttongroup',
    'radio'         => 'laravel-form-builder::radio',
    'checkbox'      => 'laravel-form-builder::checkbox',
    'select'        => 'laravel-form-builder::select',
    'choice'        => 'laravel-form-builder::choice',
    'repeated'      => 'laravel-form-builder::repeated',
    'child_form'    => 'laravel-form-builder::child_form',
    'collection'    => 'laravel-form-builder::collection',
    'static'        => 'laravel-form-builder::static',

    // Remove the laravel-form-builder:: prefix above when using template_prefix
    'template_prefix'   => '',

    'default_namespace' => 'App\Pages',

    'custom_fields' => [
//        'datetime' => App\Forms\Fields\Datetime::class
        'file' => Modules\Page\Fields\FileType::class,
    ],
];
