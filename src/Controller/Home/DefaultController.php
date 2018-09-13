<?php

namespace App\Controller\Home;

use App\Entity\Categoria;
use App\Entity\Produto;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="homepage")
     */
    public function mostrarHomePage()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/menu", name="menu")
     */
    public function mostrarMenuAction()
    {
        $produtos = $this->getDoctrine()->getRepository(Produto::class)->findAll();
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
        return $this->render('produtosECategorias.html.twig',array('produtos' => $produtos, 'categorias' => $categorias)

        );
    }

    /**
     * @Route("/contato", name="contato")
     */
    public function mostrarContato()
    {
        return $this->render('contato/contato.html.twig', [

        ]);

    }

    /**
     * @Route("/teste", name="teste")
     */
    public function teste()
    {
        return $this->render('bundles/TwigBundle/Exception/error403.html.twig', [

        ]);

    }

}
