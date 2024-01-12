<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equips;

    public function __construct($dadesEquips){
        $this->equips = $dadesEquips->get();
    }

    #[Route('/equips/{codi<\d+>?1}', name: 'dades_equip')]

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

            return $this->render('equip.html.twig', ['datos' => $resultat]);

        } else
        return $this->render('equip.null.html.twig');
    }
}
?>