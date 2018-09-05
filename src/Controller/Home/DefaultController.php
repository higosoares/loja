<?php

namespace App\Controller\Home;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
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
        $produtos = $this->getDoctrine()->getRepository('App:Produto')->findAll();
        $categorias = $this->getDoctrine()->getRepository('App:Categoria')->findAll();
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
     * @Route("/admin", name="admin")
     */
    public function mostraAdmin()
    {
        return $this->render('admin/admin.html.twig', [
        ]);

    }
}
