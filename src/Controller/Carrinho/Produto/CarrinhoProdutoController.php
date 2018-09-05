<?php

namespace App\Controller\Carrinho\Produto;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\CarrinhoProduto;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CarrinhoProdutoController extends Controller
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

    /**
     * @Route("/admin/carrinhoproduto/cadastrar", name="admin_cadastrar_carrinhoproduto")
     */

    public function cadastrarCarrinhoProduto(Request $request)
    {
      $carrinhoproduto = new CarrinhoProduto();


      $form = $this->createFormBuilder($carrinhoproduto)
      ->add('codCarrinho', EntityType::class, array( 'class' => 'App:Carrinho', 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('codProduto', EntityType::class, array( 'class' => 'App:Produto', 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $codCarrinho = $form['codCarrinho']->getData();
        $codProduto = $form['codProduto']->getData();

        $carrinhoproduto->setCodCarrinho($codCarrinho);
        $carrinhoproduto->setCodProduto($codProduto);

        $em = $this->getDoctrine()->getManager();

        $em->persist($carrinhoproduto);
        $em->flush();

        $this->addFlash('notice', 'Carrinho produto cadastrado!');
      }

      return $this->render('carrinho/produto/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/carrinhoprodutos", name="admin_carrinhoprodutos")
     */
    public function mostrarTodosCarrinhoProdutosCadastrados()
    {
      $carrinhoprodutos = $this->getDoctrine()->getRepository('App:CarrinhoProduto')->findAll();
      return $this->render('carrinho/produto/index.html.twig', array('carrinhoprodutos' => $carrinhoprodutos));
    }


    /**
     * @Route("/admin/carrinhoproduto/editar/{id}", name="admin_carrinhoproduto_editar")
     */
    public function editarCarrinhoProduto($id, Request $request)
    {
      $carrinhoprodutos = $this->getDoctrine()->getRepository('App:CarrinhoProduto')->find($id);
      $carrinhoprodutos->setCodCarrinho($carrinhoprodutos->getCodCarrinho());
      $carrinhoprodutos->setCodProduto($carrinhoprodutos->getCodProduto());

      $form = $this->createFormBuilder($carrinhoprodutos)
      ->add('codCarrinho', EntityType::class, array( 'class' => 'App:Carrinho', 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('codProduto', EntityType::class, array( 'class' => 'App:Produto', 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $codCarrinho = $form['codCarrinho']->getData();
        $codProduto = $form['codProduto']->getData();

        $em = $this->getDoctrine()->getManager();
        $carrinhoprodutos= $em->getRepository('App:CarrinhoProduto')->find($id);

        $carrinhoprodutos->setCodCarrinho($codCarrinho);
        $carrinhoprodutos->setCodProduto($codProduto);

        $em->flush();

        $this->addFlash('notice', 'Carrinho Produto atualizado');
        return $this->redirectToRoute('admin_carrinhoprodutos');
      }
      return $this->render('carrinho/produto/editar.html.twig', array('carrinhoprodutos' => $carrinhoprodutos, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/carrinhoproduto/detalhes/{id}", name="admin_carrinhoproduto_detalhes")
     */
    public function detalhesCarrinhoProduto($id)
    {
      $carrinhoprodutos = $this->getDoctrine()->getRepository('App:CarrinhoProduto')->find($id);
      return $this->render('carrinho/produto/detalhes.html.twig', array('carrinhoprodutos' => $carrinhoprodutos));

    }

    /**
     * @Route("/admin/carrinhoproduto/deletar/{id}", name="admin_carrinhoproduto_deletar")
     */
    public function deletarCarrinhoProduto($id)
    {
      $em = $this->getDoctrine()->getManager();
      $carrinhoprodutos = $em->getRepository('App:CarrinhoProduto')->find($id);

      $em->remove($carrinhoprodutos);
      $em->flush();
      $this->addFlash('notice', 'Carrinho produto removido');
      return $this->redirectToRoute('admin_carrinhoprodutos');
    }
}
