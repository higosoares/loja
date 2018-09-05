<?php

namespace App\Controller\Carrinho;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Carrinho;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CarrinhoController extends Controller
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

    public function cadastrarCarrinho(Request $request)
    {
      $carrinho = new Carrinho();


      $form = $this->createFormBuilder($carrinho)
      ->add('codCliente', EntityType::class, array( 'class' => 'App:Cliente', 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $codCliente = $form['codCliente']->getData();

        $carrinho->setCodCliente($codCliente);

        $em = $this->getDoctrine()->getManager();

        $em->persist($carrinho);
        $em->flush();

        $this->addFlash('notice', 'Carrinho cadastrado!');
      }

      return $this->render('carrinho/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/carrinhos", name="admin_carrinhos")
     */
    public function mostrarTodosCarrinhosCadastrados()
    {
      $carrinhos = $this->getDoctrine()->getRepository('App:Carrinho')->findAll();
      return $this->render('carrinho/index.html.twig', array('carrinhos' => $carrinhos));
    }


    /**
     * @Route("/admin/carrinho/editar/{id}", name="admin_carrinho_editar")
     */
    public function editarCarrinho($id, Request $request)
    {
      $carrinhos = $this->getDoctrine()->getRepository('App:Carrinho')->find($id);
      $carrinhos->setCodCliente($carrinhos->getCodCliente());

      $form = $this->createFormBuilder($carrinhos)
      ->add('codCliente', EntityType::class, array( 'class' => 'App:Cliente', 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $codCliente = $form['codCliente']->getData();

        $em = $this->getDoctrine()->getManager();
        $carrinhos= $em->getRepository('App:Carrinho')->find($id);

        $carrinhos->setCodCliente($codCliente);

        $em->flush();

        $this->addFlash('notice', 'Carrinho atualizado');
        return $this->redirectToRoute('admin_carrinhos');
      }
      return $this->render('carrinho/editar.html.twig', array('carrinhos' => $carrinhos, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/carrinho/detalhes/{id}", name="admin_carrinho_detalhes")
     */
    public function detalhesCarrinho($id)
    {
      $carrinhos = $this->getDoctrine()->getRepository('App:Carrinho')->find($id);
      return $this->render('carrinho/detalhes.html.twig', array('carrinhos' => $carrinhos));

    }

    /**
     * @Route("/admin/carrinho/deletar/{id}", name="admin_carrinho_deletar")
     */
    public function deletarCarrinho($id)
    {
      $em = $this->getDoctrine()->getManager();
      $carrinhos = $em->getRepository('App:Carrinho')->find($id);

      $em->remove($carrinhos);
      $em->flush();
      $this->addFlash('notice', 'Carrinho removido');
      return $this->redirectToRoute('admin_carrinhos');
    }
}
