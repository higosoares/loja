<?php

namespace App\Controller\Item;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Item;

class ItemController extends Controller
{
    /**
     * @Route("/itens", name="itens")
     */
    public function mostrarItens(Request $request)
    {
        return $this->render('index.html.twig', [
        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/item/cadastrar", name="admin_cadastrar_item")
     */

    public function cadastrarItem(Request $request)
    {
      $item = new item();


      $form = $this->createFormBuilder($item)
      ->add('nomeItem', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('dscItem', TextType::class, array('label' => 'Descrição', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $nome = $form['nomeItem']->getData();
        $descricao = $form['dscItem']->getData();

        $item->setNomeItem($nome);
        $item->setDscItem($descricao);

        $em = $this->getDoctrine()->getManager();

        $em->persist($item);
        $em->flush();

        $this->addFlash('notice', 'Item cadastrado!');
      }

      return $this->render('item/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/itens", name="admin_itens")
     */
    public function mostrarTodosItensCadastrados()
    {
      $itens = $this->getDoctrine()->getRepository('App:Item')->findAll();
      return $this->render('item/index.html.twig', array('itens' => $itens));
    }


    /**
     * @Route("/admin/item/editar/{id}", name="admin_item_editar")
     */
    public function editarItem($id, Request $request)
    {
      $itens = $this->getDoctrine()->getRepository('App:Item')->find($id);
      $itens->setNomeItem($itens->getNomeItem());
      $itens->setDscItem($itens->getDscItem());

      $form = $this->createFormBuilder($itens)
      ->add('nomeItem', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('dscItem', TextType::class, array('label' => 'Descrição', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $nome = $form['nomeItem']->getData();
        $descricao = $form['dscItem']->getData();

        $em = $this->getDoctrine()->getManager();
        $itens= $em->getRepository('App:Item')->find($id);

        $itens->setNomeItem($nome);
        $itens->setDscItem($descricao);

        $em->flush();

        $this->addFlash('notice', 'Item atualizado');
        return $this->redirectToRoute('admin_itens');
      }
      return $this->render('item/editar.html.twig', array('itens' => $itens, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/item/detalhes/{id}", name="admin_item_detalhes")
     */
    public function detalhesItem($id)
    {
      $itens = $this->getDoctrine()->getRepository('App:Item')->find($id);
      return $this->render('item/detalhes.html.twig', array('itens' => $itens));

    }

    /**
     * @Route("/admin/item/deletar/{id}", name="admin_item_deletar")
     */
    public function deletarItem($id)
    {
      $em = $this->getDoctrine()->getManager();
      $itens = $em->getRepository('App:Item')->find($id);

      $em->remove($itens);
      $em->flush();
      $this->addFlash('notice', 'Item removido');
      return $this->redirectToRoute('admin_itens');
    }
}
