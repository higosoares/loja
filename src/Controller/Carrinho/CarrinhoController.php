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

    /**
     * @Route("/admin/carrinho/cadastrar", name="admin_cadastrar_carrinho")
     */

    public function cadastrarCarrinho(Request $request, EntityManagerInterface $entityManager)
    {
        $carrinho = new Carrinho();
        
        $form = $this->createFormBuilder($carrinho)
            ->add('codCliente', EntityType::class, array('class' => Cliente::class, 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCliente = $form['codCliente']->getData();

            $carrinho->setCodCliente($codCliente);

            $entityManager->persist($carrinho);
            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho cadastrado!');
        }

        return $this->render('carrinho/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/carrinhos", name="admin_carrinhos")
     */
    public function mostrarCarrinhos()
    {
        $carrinhos = $this->getDoctrine()->getRepository(Carrinho::class)->findAll();
        return $this->render('carrinho/index.html.twig', array('carrinhos' => $carrinhos));
    }


    /**
     * @Route("/admin/carrinho/editar/{id}", name="admin_carrinho_editar")
     */
    public function editarCarrinho($id, Request $request, EntityManagerInterface $entityManager)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);
        $carrinho->setCodCliente($carrinho->getCodCliente());

        $form = $this->createFormBuilder($carrinho)
            ->add('codCliente', EntityType::class, array('class' => Cliente::class, 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCliente = $form['codCliente']->getData();

            $carrinho->setCodCliente($codCliente);

            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho atualizado');
            return $this->redirectToRoute('admin_carrinhos');
        }
        return $this->render('carrinho/editar.html.twig', array('carrinho' => $carrinho, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/carrinho/detalhes/{id}", name="admin_carrinho_detalhes")
     */
    public function detalhesCarrinho($id)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);
        return $this->render('carrinho/detalhes.html.twig', array('carrinho' => $carrinho));

    }

    /**
     * @Route("/admin/carrinho/deletar/{id}", name="admin_carrinho_deletar")
     */
    public function deletarCarrinho($id, EntityManagerInterface $entityManager)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);

        $entityManager->remove($carrinho);
        $entityManager->flush();
        $this->addFlash('notice', 'Carrinho removido');
        return $this->redirectToRoute('admin_carrinhos');
    }
}
