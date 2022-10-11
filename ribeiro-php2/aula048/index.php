<?php
    $empresa = [
        'administracao' => [
            'Joao administrador',
            'Carlos socio',
        ],
        'contabilidade' => [
            'Mariana',
            'Joaquim',
            'Antonio',
        ],
        'armazem' => [
            'gestores' => [
                'Carlos',
                'Marco',
            ],
            'operadores' => [
                'Fernando',
                'Manuel',
                'Luis',
                'Ricardo',
            ],
        ],
        'comerciais' => [
            'lisboa' => [
                'Joao Miguel',
                'Carlos Santos',
                'norte' => [
                    'Rui',
                    'Ana',
                ]
            ],
            'porto' => [
                'Marco antonio',
                'Sergio Santos',
            ],
            'coimbra' => [
                'Maria Silva',
            ]

        ]
    ];

    // print_r($empresa['administracao']);
    // print_r($empresa['contabilidade']);
    // print_r($empresa['armazem']['gestores']);
    // print_r($empresa['armazem']['operadores']);
    // print_r($empresa['comerciais']['lisboa']);
    // print_r($empresa['comerciais']['porto']);
    // print_r($empresa['comerciais']['coimbra']);
    print_r($empresa['comerciais']['lisboa']['norte']);

?>