<?php

namespace App\Controller\Compra;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Compra;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CompraController extends AbstractController
{
    /**
     * @Route("/compra", name="compra")
     */
    public function mostrarCompra(Request $request)
    {
        return $this->render('index.html.twig', [
        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/compra/cadastrar", name="admin_cadastrar_compra")
     */

    public function cadastrarCompra(Request $request, EntityManagerInterface $entityManager)
    {
        $compra = new Compra();

        $form = $this->createFormBuilder($compra)
            ->add('codFormapagamento', EntityType::class, array('class' => 'App:Formapagamento', 'choice_label' => 'dscFormapagamento', 'label' => 'Forma de pagamento', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codCarrinhoProduto', EntityType::class, array('class' => 'App:CarrinhoProduto', 'choice_label' => 'idCarrinhoProduto', 'label' => 'Carrinho Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrDescontoCompra', TextType::class, array('label' => 'Desconto da compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrTaxaCompra', TextType::class, array('label' => 'Taxa da compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrTotalCompra', TextType::class, array('label' => 'Valor total compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codFormapagamento = $form['codFormapagamento']->getData();
            $codCarrinhoProduto = $form['codCarrinhoProduto']->getData();
            $vlrDescontoCompra = $form['vlrDescontoCompra']->getData();
            $vlrTaxaCompra = $form['vlrTaxaCompra']->getData();
            $vlrTotalCompra = $form['vlrTotalCompra']->getData();

            $compra->getCodFormapagamento($codFormapagamento);
            $compra->getCodCarrinhoProduto($codCarrinhoProduto);
            $compra->getVlrDescontoCompra($vlrDescontoCompra);
            $compra->getVlrTaxaCompra($vlrTaxaCompra);
            $compra->getVlrTotalCompra($vlrTotalCompra);


            $entityManager->persist($compra);
            $entityManager->flush();

            $this->addFlash('notice', 'Compra cadastrada!');
        }

        return $this->render('compra/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/compras", name="admin_compras")
     */
    public function mostrarTodasComprasCadastradas()
    {
        $compras = $this->getDoctrine()->getRepository(Compra::class)->findAll();
        return $this->render('compra/index.html.twig', array('compras' => $compras));
    }


    /**
     * @Route("/admin/compra/editar/{id}", name="admin_compra_editar")
     */
    public function editarCompra($id, Request $request, EntityManagerInterface $entityManager)
    {
        $compra = $this->getDoctrine()->getRepository(Compra::class)->find($id);
        $compra->setCodFormapagamento($compra->getCodFormapagamento());
        $compra->setCodCarrinhoProduto($compra->getCodCarrinhoProduto());
        $compra->setVlrDescontoCompra($compra->getVlrDescontoCompra());
        $compra->setVlrTaxaCompra($compra->getVlrTaxaCompra());
        $compra->setVlrTotalCompra($compra->getVlrTotalCompra());


        $form = $this->createFormBuilder($compra)
            ->add('codFormapagamento', EntityType::class, array('class' => 'App:Formapagamento', 'choice_label' => 'dscFormapagamento', 'label' => 'Forma de pagamento', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codCarrinhoProduto', EntityType::class, array('class' => 'App:CarrinhoProduto', 'choice_label' => 'idCarrinhoProduto', 'label' => 'Carrinho produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrDescontoCompra', TextType::class, array('label' => 'Desconto da compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrTaxaCompra', TextType::class, array('label' => 'Taxa da compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrTotalCompra', TextType::class, array('label' => 'Valor total compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codFormapagamento = $form['codFormapagamento']->getData();
            $codCarrinhoProduto = $form['codCarrinhoProduto']->getData();
            $vlrDescontoCompra = $form['vlrDescontoCompra']->getData();
            $vlrTaxaCompra = $form['vlrTaxaCompra']->getData();
            $vlrTotalCompra = $form['vlrTotalCompra']->getData();

            $compra->getCodFormapagamento($codFormapagamento);
            $compra->getCodCarrinhoProduto($codCarrinhoProduto);
            $compra->getVlrDescontoCompra($vlrDescontoCompra);
            $compra->getVlrTaxaCompra($vlrTaxaCompra);
            $compra->getVlrTotalCompra($vlrTotalCompra);

            $entityManager->flush();

            $this->addFlash('notice', 'Compra atualizada');
            return $this->redirectToRoute('admin_compras');
        }
        return $this->render('compra/editar.html.twig', array('compra' => $compra, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/compra/detalhes/{id}", name="admin_compra_detalhes")
     */
    public function detalhesCompra($id)
    {
        $compras = $this->getDoctrine()->getRepository(Compra::class)->find($id);
        return $this->render('compra/detalhes.html.twig', array('compras' => $compras));

    }

    /**
     * @Route("/admin/compra/deletar/{id}", name="admin_compra_deletar")
     */
    public function deletarCompra($id, EntityManagerInterface $entityManager)
    {
        $em = $this->getDoctrine()->getManager();
        $compras = $em->getRepository(Compra::class)->find($id);

        $em->remove($compras);
        $em->flush();
        $this->addFlash('notice', 'Compra removida');
        return $this->redirectToRoute('admin_compras');
    }
}
