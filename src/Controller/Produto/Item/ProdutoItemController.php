<?php

namespace App\Controller\Produto\Item;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\ProdutoItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProdutoItemController extends AbstractController
{
    /**
     * @Route("/produto_item", name="produto_item")
     */
    public function mostrarProdutoItem()
    {

        return $this->render('default/index.html.twig', [

        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/produtoitem/cadastrar", name="admin_cadastrar_produtoitem")
     */

    public function cadastrarProdutoItem(Request $request, EntityManagerInterface $entityManager)
    {
        $produtoitem = new ProdutoItem();

        $form = $this->createFormBuilder($produtoitem)
            ->add('codProduto', EntityType::class, array('class' => 'App:Produto', 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codItem', EntityType::class, array('class' => 'App:Item', 'choice_label' => 'nomeItem', 'label' => 'Item', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codItem = $form['codItem']->getData();
            $codProduto = $form['codProduto']->getData();

            $produtoitem->setCodItem($codItem);
            $produtoitem->setCodProduto($codProduto);

            $entityManager->persist($produtoitem);
            $entityManager->flush();

            $this->addFlash('notice', 'Produto Item cadastrado!');
        }

        return $this->render('produtoitem/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/produtoitens", name="admin_produtoitens")
     */
    public function mostrarTodasprodutoItensCadastrados()
    {
        $produtoitens = $this->getDoctrine()->getRepository(ProdutoItem::class)->findAll();
        return $this->render('produtoitem/index.html.twig', array('produtoitens' => $produtoitens));
    }


    /**
     * @Route("/admin/produtoitem/editar/{id}", name="admin_produtoitem_editar")
     */
    public function editarProdutoItem($id, Request $request, EntityManagerInterface $entityManager)
    {
        $produtoitem = $this->getDoctrine()->getRepository(ProdutoItem::class)->find($id);
        $produtoitem->setCodItem($produtoitem->getCodItem());
        $produtoitem->setCodProduto($produtoitem->getCodProduto());

        $form = $this->createFormBuilder($produtoitem)
            ->add('codProduto', EntityType::class, array('class' => 'App:Produto', 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codItem', EntityType::class, array('class' => 'App:Item', 'choice_label' => 'nomeItem', 'label' => 'Item', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codProduto = $form['codProduto']->getData();
            $codItem = $form['codItem']->getData();

            $produtoitem->setCodProduto($codProduto);
            $produtoitem->setCodItem($codItem);

            $entityManager->flush();

            $this->addFlash('notice', 'Produto Item atualizado');
            return $this->redirectToRoute('admin_produtoitens');
        }
        return $this->render('produtoitem/editar.html.twig', array('produtoitem' => $produtoitem, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/produtoitem/detalhes/{id}", name="admin_produtoitem_detalhes")
     */
    public function detalhesProdutoItem($id)
    {
        $produtoitem = $this->getDoctrine()->getRepository(ProdutoItem::class)->find($id);
        return $this->render('produtoitem/detalhes.html.twig', array('produtoitem' => $produtoitem));

    }

    /**
     * @Route("/admin/produtoitem/deletar/{id}", name="admin_produtoitem_deletar")
     */
    public function deletarProdutoItem($id, EntityManagerInterface $entityManager)
    {
        $produtoitem = $this->getDoctrine()->getRepository(ProdutoItem::class)->find($id);

        $entityManager->remove($produtoitem);
        $entityManager->flush();
        $this->addFlash('notice', 'Produto Item Removido');
        return $this->redirectToRoute('admin_produtoitens');
    }
}
