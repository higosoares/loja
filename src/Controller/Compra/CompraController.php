<?php

namespace App\Controller\Compra;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Compra;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CompraController extends AbstractController
{
    /**
     * @Route("/compra", name="compra")
     */
    public function mostrarCompra(Request $request)
    {
        return $this->render('compra/index.html.twig', [
        ]);
    }


}
