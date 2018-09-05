<?php

namespace App\Controller\Produto;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\Produto;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Controller\CategoriaSubcategoriaController;
class ProdutoController extends Controller
{

    /**
     * @Route("/produtos", name="produtos")
     */
    public function mostrar_produtos_loja()
    {
        $produtos = $this->getDoctrine()->getRepository('App:Produto')->findAll();
  		  return $this->render('produto/produtos.html.twig', array('produtos' => $produtos));
    }

    /**
     * @Route("/produto/{id}", name="produto_detalhes")
     */
    public function mostra_produto_loja($id)
    {
      $produto = $this->getDoctrine()->getRepository('App:Produto')->find($id);
      $produtos = $this->getDoctrine()->getRepository('App:Produto')->findAll();
      return $this->render('produto/produto.html.twig', array('produto' => $produto, 'produtos' => $produtos));

    }



    //Parte de admin

    /**
  	 * @Route("/admin/produto/cadastrar", name="admin_cadastrar_produto")
  	 */

  	public function cadastrarProduto(Request $request)
  	{
  		$produto = new Produto();

      $categoria_subcategorias = $this->getDoctrine()->getRepository('App:CategoriaSubcategoria')->findAll();
  		$form = $this->createFormBuilder($produto)
  		->add('nmeProduto', TextType::class, array('label' => 'Nome','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
  		->add('dscProduto', TextType::class, array('label' => 'Descrição','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
  		->add('vlrProduto', TextType::class, array('label' => 'Valor','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('stsInventarioProduto', ChoiceType::class, array('choices' => array('No inventário' => true, 'Fora do inventário'=> false),'label' => 'Status inventário','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('vlrPesoProduto', TextType::class, array('label' => 'Peso','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('codCategoriaSubcategoria', EntityType::class, array( 'class' => 'App:CategoriaSubcategoria',

      'choice_label' =>  function ($codCategoriaSubcategoria) {
        $categoria = $codCategoriaSubcategoria->getCategoriaCategoria()->getNmeCategoria();
        $subcategoria = $codCategoriaSubcategoria->getSubcategoriaSubcategoria()->getNmeSubcategoria();
        return $subcategoria.' - '.$categoria;
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


  			$em = $this->getDoctrine()->getManager();

  			$em->persist($produto);
  			$em->flush();

  			$this->addFlash('notice', 'Produto cadastrado!');
  		}

  		return $this->render('produto/cadastrar.html.twig', array(
  				'form' => $form->createView(),
  		));

  	}


  	/**
  	 * @Route("/admin/produtos", name="admin_produtos")
  	 */
  	public function mostrarTodosProdutosCadastrados()
  	{
  		$produtos = $this->getDoctrine()->getRepository('App:Produto')->findAll();
  		return $this->render('produto/index.html.twig', array('produtos' => $produtos));
  	}


  	/**
  	 * @Route("/admin/produto/editar/{id}", name="admin_produto_editar")
  	 */
  	public function editarProduto($id, Request $request)
  	{
  		$produtos = $this->getDoctrine()->getRepository('App:Produto')->find($id);
      $produtos->setNmeProduto($produtos->getNmeProduto());
      $produtos->setDscProduto($produtos->getDscProduto());
      $produtos->setVlrProduto($produtos->getVlrProduto());
      $produtos->setStsInventarioProduto($produtos->getStsInventarioProduto());
      $produtos->setVlrPesoProduto($produtos->getVlrPesoProduto());
      $produtos->setCodCategoriaSubcategoria($produtos->getCodCategoriaSubcategoria());

  		$form = $this->createFormBuilder($produtos)
      ->add('nmeProduto', TextType::class, array('label' => 'Nome','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
  		->add('dscProduto', TextType::class, array('label' => 'Descrição','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
  		->add('vlrProduto', TextType::class, array('label' => 'Valor','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('stsInventarioProduto', ChoiceType::class, array('choices' => array('No inventário' => true, 'Fora do inventário'=> false), 'label' => 'Status inventário','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('vlrPesoProduto', TextType::class, array('label' => 'Peso','attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('codCategoriaSubcategoria', EntityType::class, array( 'class' => 'App:CategoriaSubcategoria',

      'choice_label' =>  function ($codCategoriaSubcategoria) {
        $categoria = $codCategoriaSubcategoria->getCategoriaCategoria()->getNmeCategoria();
        $subcategoria = $codCategoriaSubcategoria->getSubcategoriaSubcategoria()->getNmeSubcategoria();
        return $subcategoria.' - '.$categoria;
    },
      //'choice_label' => 'idCategoriaSubcategoria',
      'label' => 'SubCategoria e Categoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))

      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
  		->getForm();
  		$form->handleRequest($request);

  		if($form->isSubmitted() && $form->isValid()){
        $nome = $form['nmeProduto']->getData();
  			$descricao = $form['dscProduto']->getData();
  			$valor = $form['vlrProduto']->getData();
        $status = $form['stsInventarioProduto']->getData();
        $peso = $form['vlrPesoProduto']->getData();
        $categoria_subcategoria = $form['codCategoriaSubcategoria']->getData();

  			$em = $this->getDoctrine()->getManager();
  			$produtos= $em->getRepository('App:Produto')->find($id);

        $produtos->setNmeProduto($nome);
  			$produtos->setDscProduto($descricao);
  			$produtos->setVlrProduto($valor);
        $produtos->setStsInventarioProduto($status);
        $produtos->setVlrPesoProduto($peso);
        $produtos->setCodCategoriaSubcategoria($categoria_subcategoria);

  			$em->flush();

  			$this->addFlash('notice', 'Produto atualizado');
  			return $this->redirectToRoute('admin_produtos');
  		}
  		return $this->render('produto/editar.html.twig', array('produtos' => $produtos, 'form' => $form->createView()));
  	}


  	/**
  	 * @Route("/admin/produto/detalhes/{id}", name="admin_produto_detalhes")
  	 */
  	public function detalhesProduto($id)
  	{
  		$produtos = $this->getDoctrine()->getRepository('App:Produto')->find($id);
  		return $this->render('produto/detalhes.html.twig', array('produtos' => $produtos));

  	}

  	/**
  	 * @Route("/admin/produto/deletar/{id}", name="admin_produto_deletar")
  	 */
  	public function deletarProduto($id)
  	{
  		$em = $this->getDoctrine()->getManager();
  		$produtos = $em->getRepository('App:Produto')->find($id);

  		$em->remove($produtos);
  		$em->flush();
  		$this->addFlash('notice', 'Produto removido');
  		return $this->redirectToRoute('admin_produtos');
  	}

}
