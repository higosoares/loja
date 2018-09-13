<?php

namespace App\Controller\Carrinho;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Carrinho;
use App\Entity\Cliente;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CarrinhoController extends AbstractController
{
    /**
     * @Route("/carrinho", name="carrinho")
     */
    public function mostrarCarrinho()
    {
        return $this->render('index.html.twig', [
        ]);
    }

    /**
     * @Route("/checagem", name="checagem")
     */
    public function mostrarChecagem()
    {
        return $this->render('carrinho/checagem.html.twig', [
        ]);
    }

    //Parte de admin


}
