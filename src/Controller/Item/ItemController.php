<?php

namespace App\Controller\Item;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Item;

class ItemController extends AbstractController
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

    public function cadastrarItem(Request $request, EntityManagerInterface $entityManager)
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

            $entityManager->persist($item);
            $entityManager->flush();

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
        $itens = $this->getDoctrine()->getRepository(Item::class)->findAll();
        return $this->render('item/index.html.twig', array('itens' => $itens));
    }


    /**
     * @Route("/admin/item/editar/{id}", name="admin_item_editar")
     */
    public function editarItem($id, Request $request, EntityManagerInterface $entityManager)
    {
        $item = $this->getDoctrine()->getRepository(Item::class)->find($id);
        $item->setNomeItem($item->getNomeItem());
        $item->setDscItem($item->getDscItem());

        $form = $this->createFormBuilder($item)
            ->add('nomeItem', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('dscItem', TextType::class, array('label' => 'Descrição', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nomeItem']->getData();
            $descricao = $form['dscItem']->getData();

            $item->setNomeItem($nome);
            $item->setDscItem($descricao);

            $entityManager->flush();

            $this->addFlash('notice', 'Item atualizado');
            return $this->redirectToRoute('admin_itens');
        }
        return $this->render('item/editar.html.twig', array('item' => $item, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/item/detalhes/{id}", name="admin_item_detalhes")
     */
    public function detalhesItem($id)
    {
        $item = $this->getDoctrine()->getRepository(Item::class)->find($id);
        return $this->render('item/detalhes.html.twig', array('item' => $item));

    }

    /**
     * @Route("/admin/item/deletar/{id}", name="admin_item_deletar")
     */
    public function deletarItem($id, EntityManagerInterface $entityManager)
    {
        $itens = $this->getDoctrine()->getRepository(Item::class)->find($id);

        $entityManager->remove($itens);
        $entityManager->flush();
        $this->addFlash('notice', 'Item removido');
        return $this->redirectToRoute('admin_itens');
    }
}
