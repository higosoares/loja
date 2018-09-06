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

    /**
     * @Route("/admin/carrinhoproduto/cadastrar", name="admin_cadastrar_carrinhoproduto")
     */

    public function cadastrarCarrinhoProduto(Request $request, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = new CarrinhoProduto();
        
        $form = $this->createFormBuilder($carrinhoproduto)
            ->add('codCarrinho', EntityType::class, array('class' => Carrinho::class, 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codProduto', EntityType::class, array('class' => Produto::class, 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCarrinho = $form['codCarrinho']->getData();
            $codProduto = $form['codProduto']->getData();

            $carrinhoproduto->setCodCarrinho($codCarrinho);
            $carrinhoproduto->setCodProduto($codProduto);

            $entityManager->persist($carrinhoproduto);
            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho produto cadastrado!');
        }

        return $this->render('carrinho/produto/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/admin/carrinhoprodutos", name="admin_carrinhoprodutos")
     */
    public function mostrarCarrinhoProdutos()
    {
        $carrinhoprodutos = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->findAll();
        return $this->render('carrinho/produto/index.html.twig', array('carrinhoprodutos' => $carrinhoprodutos));
    }


    /**
     * @Route("/admin/carrinhoproduto/editar/{id}", name="admin_carrinhoproduto_editar")
     */
    public function editarCarrinhoProduto($id, Request $request, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);
        $carrinhoproduto->setCodCarrinho($carrinhoproduto->getCodCarrinho());
        $carrinhoproduto->setCodProduto($carrinhoproduto->getCodProduto());

        $form = $this->createFormBuilder($carrinhoproduto)
            ->add('codCarrinho', EntityType::class, array('class' => Carrinho::class, 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codProduto', EntityType::class, array('class' => Produto::class, 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCarrinho = $form['codCarrinho']->getData();
            $codProduto = $form['codProduto']->getData();

            $carrinhoproduto->setCodCarrinho($codCarrinho);
            $carrinhoproduto->setCodProduto($codProduto);

            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho Produto atualizado');
            return $this->redirectToRoute('admin_carrinhoprodutos');
        }
        return $this->render('carrinho/produto/editar.html.twig', array('carrinhoproduto' => $carrinhoproduto, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/carrinhoproduto/detalhes/{id}", name="admin_carrinhoproduto_detalhes")
     */
    public function detalhesCarrinhoProduto($id)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);
        return $this->render('carrinho/produto/detalhes.html.twig', array('carrinhoproduto' => $carrinhoproduto));

    }

    /**
     * @Route("/admin/carrinhoproduto/deletar/{id}", name="admin_carrinhoproduto_deletar")
     */
    public function deletarCarrinhoProduto($id, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);

        $entityManager->remove($carrinhoproduto);
        $entityManager->flush();
        $this->addFlash('notice', 'Carrinho produto removido');
        return $this->redirectToRoute('admin_carrinhoprodutos');
    }
}
