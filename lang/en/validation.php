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

    'accepted' => 'el :attribute debe ser aceptado.',
    'accepted_if' => 'el :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'el :attribute no es una URL válida.',
    'after' => 'el :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'el :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'el :attribute solo puede contener letras.',
    'alpha_dash' => 'el :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'el :attribute solo puede contener letras y números.',
    'array' => 'el :attribute debe ser un array.',
    'before' => 'el :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'el :attribute debe ser una fecha antes o igual a :date.',
    'between' => [
        'numeric' => 'el :attribute debe estar entre :min y :max.',
        'file' => 'el :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'el :attribute debe estar entre :min y :max caracteres.',
        'array' => 'el :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'el :attribute debe ser verdadero o falso.',
    'confirmed' => 'la confirmación de :attribute no coincide.',
    'current_password' => 'la contraseña es incorrecta.',
    'date' => 'el :attribute no es una fecha válida.',
    'date_equals' => 'el :attribute debe ser una fecha igual a :date.',
    'date_format' => 'el :attribute no coincide con el formato :format.',
    'declined' => 'el :attribute debe ser rechazado.',
    'declined_if' => 'el :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'el :attribute y :other deben ser diferentes.',
    'digits' => 'el :attribute debe ser :digits dígitos.',
    'digits_between' => 'el :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'el :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'el campo :attribute tiene un valor duplicado.',
    'email' => 'el :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'el :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'el :attribute seleccionado es inválido.',
    'exists' => 'el :attribute seleccionado es inválido.',
    'file' => 'el :attribute debe ser un archivo.',
    'filled' => 'el campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'el :attribute debe ser mayor que :value.',
        'file' => 'el :attribute debe ser mayor que :value kilobytes.',
        'string' => 'el :attribute debe ser mayor que :value caracteres.',
        'array' => 'el :attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'el :attribute debe ser mayor o igual que :value.',
        'file' => 'el :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'el :attribute debe ser mayor o igual que :value caracteres.',
        'array' => 'el :attribute debe tener :value elementos o más.',
    ],
    'image' => 'el :attribute debe ser una imagen.',
    'in' => 'el :attribute seleccionado es inválido.',
    'in_array' => 'el campo :attribute no existe en :other.',
    'integer' => 'el :attribute debe ser un número entero.',
    'ip' => 'el :attribute debe ser una dirección IP válida.',
    'ipv4' => 'el :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'el :attribute debe ser una dirección IPv6 válida.',
    'json' => 'el :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'el :attribute debe ser menor que :value.',
        'file' => 'el :attribute debe ser menor que :value kilobytes.',
        'string' => 'el :attribute debe ser menor que :value caracteres.',
        'array' => 'el :attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'el :attribute debe ser menor o igual que :value.',
        'file' => 'el :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'el :attribute debe ser menor o igual que :value caracteres.',
        'array' => 'el :attribute no debe tener más de :value elementos.',
    ],
    'mac_address' => 'el :attribute debe ser una dirección MAC válida.',
    'max' => [
        'numeric' => 'el :attribute no debe ser mayor que :max.',
        'file' => 'el :attribute no debe ser mayor que :max kilobytes.',
        'string' => 'el :attribute no debe ser mayor que :max caracteres.',
        'array' => 'el :attribute no debe tener más de :max elementos.',
    ],
    'mimes' => 'el :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'el :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'el :attribute debe ser al menos :min.',
        'file' => 'el :attribute debe ser al menos :min kilobytes.',
        'string' => 'el :attribute debe ser al menos :min caracteres.',
        'array' => 'el :attribute debe tener al menos :min elementos.',
    ],
    'multiple_of' => 'el :attribute debe ser un múltiplo de :value.',
    'not_in' => 'el :attribute seleccionado es inválido.',
    'not_regex' => 'el formato de :attribute es inválido.',
    'numeric' => 'el :attribute debe ser un número.',
    'password' => 'la contraseña es incorrecta.',
    'present' => 'el campo :attribute debe estar presente.',
    'prohibited' => 'el campo :attribute está prohibido.',
    'prohibited_if' => 'el campo :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'el campo :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'el campo :attribute prohibe que :other esté presente.',
    'regex' => 'el formato de :attribute es inválido.',
    'required' => 'el campo :attribute es obligatorio.',
    'required_array_keys' => 'el campo :attribute debe contener entradas para: :values.',
    'required_if' => 'el campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'el campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'el campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'el campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'el campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'el campo :attribute es obligatorio cuando ninguno de :values está presente.',
    'same' => 'el :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'el :attribute debe ser :size.',
        'file' => 'el :attribute debe ser :size kilobytes.',
        'string' => 'el :attribute debe ser :size caracteres.',
        'array' => 'el :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'el :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'el :attribute debe ser una cadena.',
    'timezone' => 'el :attribute debe ser una zona horaria válida.',
    'unique' => 'el :attribute ya ha sido tomado.',
    'uploaded' => 'el :attribute no se pudo cargar.',
    'url' => 'el :attribute debe ser una URL válida.',
    'uuid' => 'el :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
