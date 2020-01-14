<?php


return [
    'users' => [
        'name' => 'Usuarios',
        'for_files' => false,
        'description' => 'Administración de Usuarios',
        'editor' => false,
        'fields' => [
            'email' => [
                'type' => 'textDisabled',
                'title' => 'Email',
                'description' => 'Introduzca el correo electrónico del usuario.',
                'rules' => []
            ],
            'password' => [
                'type' => 'text',
                'title' => 'Contraseña',
                'description' => 'Cambio de contraseña',
                'rules' => ['required']
            ],

        ]
    ],
];