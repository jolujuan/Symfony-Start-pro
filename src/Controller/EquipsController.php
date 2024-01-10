<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController
{
    private $equips = [
        'equipo1' => [
            'codi' => 1,
            'nom' => 'Equip Roig',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Elena', 'Vicent', 'Joan', 'Maria']
        ],

        'equipo2' => [
            'codi' => 2,
            'nom' => 'Equip Blau',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Carlos', 'Laura', 'Pedro', 'Ana']
        ],

        'equipo3' => [
            'codi' => 3,
            'nom' => 'Equip Verd',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Sofia', 'Miguel', 'Clara', 'Luis']
        ],

        'equipo4' => [
            'codi' => 4,
            'nom' => 'Equip Groc',
            'cicle' => 'DAW',
            'curs' => '22/23',
            'membres' => ['Irene', 'Jorge', 'Nuria', 'David']
        ]
    ];

    #[Route('/equip/{codi}', name: 'dades_equip')]

    public function equip($codi)
    {
        $resultat = array_filter(
            $this->equips,
            function ($equip) use ($codi) {
                return $equip["codi"] == $codi;
            }
        );
        if (count($resultat) > 0) {
            $resposta = "";
            $resultat = array_shift($resultat);
            $resposta .= "<ul><li>Nombre del equip: " . $resultat["nom"] . "</li>" .
                "<li>Cicle: " . $resultat["cicle"] . "</li>" .
                "<li>Curs: " . $resultat["curs"] . "</li>" .
                "<li>Membres: " . implode(', ', $resultat["membres"]) . "</li></ul>";

            return new Response("<html><body>$resposta</body></html>");
        } else
            return new Response("No s'ha trobat l'equip: $codi");
    }
}
?>