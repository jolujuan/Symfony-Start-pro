<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IniciController extends AbstractController
{
    private $equips;

    public function __construct($dadesEquips){
        $this->equips = $dadesEquips->get();
    }


    #[Route('/', name: 'inici')]

    public function inici()
    {
        return $this->render('inici.html.twig',['equips'=>$this->equips]);
    }
}
?>