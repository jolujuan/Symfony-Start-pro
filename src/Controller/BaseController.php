<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    #[Route('/', name: 'base')]

    public function base()
    {
        return $this->render('base.html.twig');
    }
}
?>