<?php

namespace App\Controller\Produto;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\Produto;
use App\Entity\CategoriaSubcategoria;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProdutoController extends AbstractController
{

    /**
     * @Route("/produtos", name="produtos")
     */
    public function mostrarProdutos()
    {
        $produtos = $this->getDoctrine()->getRepository(Produto::class)->findAll();
        return $this->render('produto/produtos.html.twig', array('produtos' => $produtos));
    }

    /**
     * @Route("/produto/{id}", name="produto_detalhes")
     */
    public function mostrarProduto($id)
    {
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);
        $imagens = $produto->getTxUrlImagemProduto();
        if ($imagens)
        {
            $imagens = explode(";", $imagens);
        }
        return $this->render('produto/produto.html.twig', array('produto' => $produto, 'imagens'=> $imagens));

    }



    //Parte de admin

    /**
     * @Route("/admin/produto/cadastrar", name="admin_cadastrar_produto")
     */

    public function cadastrarProduto(Request $request, EntityManagerInterface $entityManager)
    {
        $produto = new Produto();

        $categoria_subcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findAll();
        $form = $this->createFormBuilder($produto)
            ->add('nmeProduto', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('dscProduto', TextType::class, array('label' => 'Descrição', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrProduto', TextType::class, array('label' => 'Valor', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('stsInventarioProduto', ChoiceType::class, array('choices' => array('No inventário' => true, 'Fora do inventário' => false), 'label' => 'Status inventário', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrPesoProduto', TextType::class, array('label' => 'Peso', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codCategoriaSubcategoria', EntityType::class, array('class' => CategoriaSubcategoria::class,

                'choice_label' => function ($codCategoriaSubcategoria) {
                    $categoria = $codCategoriaSubcategoria->getCategoriaCategoria()->getNmeCategoria();
                    $subcategoria = $codCategoriaSubcategoria->getSubcategoriaSubcategoria()->getNmeSubcategoria();
                    return $subcategoria . ' - ' . $categoria;
                },
                //'choice_label' => 'idCategoriaSubcategoria',
                'label' => 'SubCategoria e Categoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeProduto']->getData();
            $descricao = $form['dscProduto']->getData();
            $valor = $form['vlrProduto']->getData();
            $status = $form['stsInventarioProduto']->getData();
            $peso = $form['vlrPesoProduto']->getData();
            $categoria_subcategoria = $form['codCategoriaSubcategoria']->getData();

            $produto->setNmeProduto($nome);
            $produto->setDscProduto($descricao);
            $produto->setVlrProduto($valor);
            $produto->setStsInventarioProduto($status);
            $produto->setVlrPesoProduto($peso);
            $produto->setCodCategoriaSubcategoria($categoria_subcategoria);

            $entityManager->persist($produto);
            $entityManager->flush();

            $this->addFlash('notice', 'Produto cadastrado!');
        }

        return $this->render('produto/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/produtos", name="admin_produtos")
     */
    public function mostrarProdutosAdmin()
    {
        $produto = $this->getDoctrine()->getRepository(Produto::class)->findAll();
        return $this->render('produto/index.html.twig', array('produto' => $produto));
    }


    /**
     * @Route("/admin/produto/editar/{id}", name="admin_produto_editar")
     */
    public function editarProduto($id, Request $request, EntityManagerInterface $entityManager)
    {
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);
        $produto->setNmeProduto($produto->getNmeProduto());
        $produto->setDscProduto($produto->getDscProduto());
        $produto->setVlrProduto($produto->getVlrProduto());
        $produto->setStsInventarioProduto($produto->getStsInventarioProduto());
        $produto->setVlrPesoProduto($produto->getVlrPesoProduto());
        $produto->setCodCategoriaSubcategoria($produto->getCodCategoriaSubcategoria());

        $form = $this->createFormBuilder($produto)
            ->add('nmeProduto', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('dscProduto', TextType::class, array('label' => 'Descrição', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrProduto', TextType::class, array('label' => 'Valor', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('stsInventarioProduto', ChoiceType::class, array('choices' => array('No inventário' => true, 'Fora do inventário' => false), 'label' => 'Status inventário', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('vlrPesoProduto', TextType::class, array('label' => 'Peso', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codCategoriaSubcategoria', EntityType::class, array('class' => CategoriaSubcategoria::class,

                'choice_label' => function ($codCategoriaSubcategoria) {
                    $categoria = $codCategoriaSubcategoria->getCategoriaCategoria()->getNmeCategoria();
                    $subcategoria = $codCategoriaSubcategoria->getSubcategoriaSubcategoria()->getNmeSubcategoria();
                    return $subcategoria . ' - ' . $categoria;
                },
                //'choice_label' => 'idCategoriaSubcategoria',
                'label' => 'SubCategoria e Categoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeProduto']->getData();
            $descricao = $form['dscProduto']->getData();
            $valor = $form['vlrProduto']->getData();
            $status = $form['stsInventarioProduto']->getData();
            $peso = $form['vlrPesoProduto']->getData();
            $categoria_subcategoria = $form['codCategoriaSubcategoria']->getData();

            $produto->setNmeProduto($nome);
            $produto->setDscProduto($descricao);
            $produto->setVlrProduto($valor);
            $produto->setStsInventarioProduto($status);
            $produto->setVlrPesoProduto($peso);
            $produto->setCodCategoriaSubcategoria($categoria_subcategoria);

            $entityManager->flush();

            $this->addFlash('notice', 'Produto atualizado');
            return $this->redirectToRoute('admin_produtos');
        }
        return $this->render('produto/editar.html.twig', array('produto' => $produto, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/produto/detalhes/{id}", name="admin_produto_detalhes")
     */
    public function detalhesProduto($id)
    {
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);
        return $this->render('produto/detalhes.html.twig', array('produto' => $produto));

    }

    /**
     * @Route("/admin/produto/deletar/{id}", name="admin_produto_deletar")
     */
    public function deletarProduto($id, EntityManagerInterface $entityManager)
    {
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);

        $entityManager->remove($produto);
        $entityManager->flush();
        $this->addFlash('notice', 'Produto removido');
        return $this->redirectToRoute('admin_produtos');
    }

}
