<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => ':attribute не является допустимым URL.',
    'after'                => ':attribute дата должна быть позднее :date.',
    'after_or_equal'       => ':attribute дата должна быть равна или больше :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры, тире и символы подчеркивания.',
    'alpha_num'            => ':attribute может содержать только буквы и цифры.',
    'array'                => ':attribute должен быть массив.',
    'before'               => ':attribute дата должна быть до :date.',
    'before_or_equal'      => ':attribute дата должна быть равной или до :date.',
    'between'              => [
        'numeric' => ':attribute должен находиться между :min и :max.',
        'file'    => ':attribute должен находиться между :min и :max килобайт.',
        'string'  => ':attribute должен находиться между :min и :max символов.',
        'array'   => ':attribute должен находиться между :min и :max позициями.',
    ],
    'boolean'              => ':attribute поле должно быть истинным или ложным.',
    'confirmed'            => ':attribute подтверждение не совпадает.',
    'date'                 => ':attribute недопустимая дата.',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должны отличаться.',
    'digits'               => ':attribute должно быть :digits цифр.',
    'digits_between'       => ':attribute должен находиться между :min и :max цифрами.',
    'dimensions'           => ':attribute имеет недопустимые размеры изображения.',
    'distinct'             => ':attribute поле имеет повторяющееся значение.',
    'email'                => ':attribute адрес электронной почты должен быть действительным.',
    'exists'               => 'выбранный :attribute является недействительным.',
    'file'                 => ':attribute должен быть файл.',
    'filled'               => ':attribute поле должно быть заполнено.',
    'gt'                   => [
        'numeric' => ':attribute должно быть больше, чем :value.',
        'file'    => ':attribute должно быть больше, чем :value килобайт.',
        'string'  => ':attribute должно быть больше, чем :value символов.',
        'array'   => ':attribute должно быть больше, чем :value позиций.',
    ],
    'gte'                  => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file'    => ':attribute должно быть больше или равно  :value килобайт.',
        'string'  => ':attribute должно быть больше или равно  :value символов.',
        'array'   => ':attribute должно иметь :value позиций или больше.',
    ],
    'image'                => ':attribute должен быть изображением.',
    'in'                   => 'Выбранный :attribute является недействительным.',
    'in_array'             => ':attribute поле не существует в :other.',
    'integer'              => ':attribute должно быть целым числом.',
    'ip'                   => ':attribute должен быть действительным IP-адресом.',
    'ipv4'                 => ':attribute должен быть действительным адресом IPv4.',
    'ipv6'                 => ':attribute должен быть действительным адресом IPv6.',
    'json'                 => ':attribute должна быть допустимой JSON строкой.',
    'lt'                   => [
        'numeric' => ':attribute должно быть меньше, чем :value.',
        'file'    => ':attribute должно быть меньше, чем :value килобайт.',
        'string'  => ':attribute должно быть меньше, чем :value символов.',
        'array'   => ':attribute должно быть меньше, чем :value позиций.',
    ],
    'lte'                  => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file'    => ':attribute должно быть меньше или равно :value килобайт.',
        'string'  => ':attribute должно быть меньше или равно :value символов.',
        'array'   => ':attribute должно быть меньше или равно :value позиций.',
    ],
    'max'                  => [
        'numeric' => ':attribute не может быть больше, чем :max.',
        'file'    => ':attribute не может быть больше, чем :max килобайт.',
        'string'  => ':attribute не может быть больше, чем :max символов.',
        'array'   => ':attribute не может быть больше, чем than :max позиций.',
    ],
    'mimes'                => ':attribute должен быть файл типа: :values.',
    'mimetypes'            => ':attribute должен быть файл типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file'    => ':attribute должен быть не менее :min килобайт.',
        'string'  => ':attribute должен быть не менее :min символов.',
        'array'   => ':attribute должен быть не менее :min позиций.',
    ],
    'not_in'               => 'Выбранный :attribute является недействительным.',
    'not_regex'            => ':attribute формат недействителен.',
    'numeric'              => ':attribute должен быть числом.',
    'present'              => ':attribute поле должно присутствовать.',
    'regex'                => ':attribute формат недействителен.',
    'required'             => ':attribute Поле, обязательное для заполнения.',
    'required_if'          => ':attribute поле обязательно, когда :other соответствует :value.',
    'required_unless'      => ':attribute field поле обязательно, если только :other в :values.',
    'required_with'        => ':attribute поле обязательно, когда :values присутствует.',
    'required_with_all'    => ':attribute поле обязательно, когда :values присутствует.',
    'required_without'     => ':attribute поле обязательно, когда :values не присутствует.',
    'required_without_all' => ':attribute поле является обязательным, если ни одно из значений :values не присутствует.',
    'same'                 => ':attribute и :other должны соответствовать.',
    'size'                 => [
        'numeric' => ':attribute должен быть :size.',
        'file'    => ':attribute должен быть :size килобайт.',
        'string'  => ':attribute должен быть :size символов.',
        'array'   => ':attribute должен содержать :size позиций.',
    ],
    'string'               => ':attribute должна быть строка.',
    'timezone'             => ':attribute должна быть допустимой зоной.',
    'unique'               => ':attribute уже занят.',
    'uploaded'             => ':attribute не удалось загрузить.',
    'url'                  => ':attribute формат недействителен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];