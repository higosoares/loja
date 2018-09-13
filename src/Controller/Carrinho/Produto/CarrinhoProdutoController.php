<?php

namespace App\Controller\Carrinho\Produto;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\CarrinhoProduto;
use App\Entity\Carrinho;
use App\Entity\Produto;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CarrinhoProdutoController extends AbstractController
{
    /**
     * @Route("/carrinhoproduto", name="carrinhoproduto")
     */
    public function mostrarCarrinhoProduto()
    {
        return $this->render('index.html.twig', [
        ]);
    }

    //Parte de admin


}
