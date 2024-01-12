<?php
namespace App\Service;

class ServeiDadesEquip
{
    private $equips = [
        'equipo1' => [
            'codi' => 1,
            'nom' => 'Equip Roig',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Elena', 'Vicent', 'Joan', 'Maria'],
            'imagen' => 'rojo.png'
        ],

        'equipo2' => [
            'codi' => 2,
            'nom' => 'Equip Blau',
            'cicle' => 'DAW',
            'curs' =>  '22/23',
            'membres' => ['Carlos', 'Laura', 'Pedro', 'Ana'],
            'imagen' => 'azul.png'
        ],

        'equipo3' => [
            'codi' => 3,
            'nom' => 'Equip Verd',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Sofia', 'Miguel', 'Clara', 'Luis'],
            'imagen' => 'verde.png'
        ],

        'equipo4' => [
            'codi' => 4,
            'nom' => 'Equip Groc',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Irene', 'Jorge', 'Nuria', 'David'],
            'imagen' => 'amarillo.png'
        ]
    ];

    public function get()
    {
        return $this->equips;
    }
}
?>