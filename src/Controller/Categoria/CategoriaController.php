<?php

namespace App\Controller\Categoria;

use App\Entity\CategoriaSubcategoria;
use App\Entity\Subcategoria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Categoria;

class CategoriaController extends AbstractController
{
    /**
     * @Route("/categoria/{id}", name="categoria_detalhes")
     */
    public function mostra_categoria_loja($id)
    {
        $categoria_subcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findBy(array('categoriaCategoria' => $id));
        //var_dump($categoria_subcategoria);
        $produtos = $this->getDoctrine()->getRepository('App:Produto')->findBy(array('codCategoriaSubcategoria' => $categoria_subcategorias));
        /*->createQueryBuilder("JOIN categoria_subcategoria, cs on p.cod_categoria_subCategoria=cs.id_categoria_subCategoria JOIN categoria, c on c.id_categoria=cs.categoria_id_categoria JOIN subcategoria, s on s.id_subCategoria=cs.subCategoria_id_subCategoria")
        ->select("p.idProduto, p.nmeProduto, p.vlProduto, c.nmeCategoria ")
        ->getQuery()->getResult();*/
        //var_dump($produtos);
        //$produtos = $this->getDoctrine()->getRepository('App:Produto')->findBy(array('codCategoriaSubcategoria' => $id ));
        return $this->render('categoria/categoria.html.twig', array('categoria_subcategorias' => $categoria_subcategorias, 'produtos' => $produtos));

    }

    /**
     * @Route("/categorias", name="categorias")
     */
    public function mostrarCategorias()
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
        $subcategorias = $this->getDoctrine()->getRepository(Subcategoria::class)->findAll();
        $categorias_subcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findBy(
            array('subcategoriaSubcategoria' => $subcategorias, 'categoriaCategoria' => $categorias)
        );
        return $this->render('categorias.html.twig', array('categorias' => $categorias,
            'categorias_subcategorias' => $categorias_subcategorias,
            'subcategorias' => $subcategorias));
    }


    //Parte de admin

    /**
     * @Route("/admin/categoria/cadastrar", name="admin_cadastrar_categoria")
     */

    public function cadastrarCategoria(Request $request, EntityManagerInterface $entityManager)
    {

        $categoria = new Categoria();

        $form = $this->createFormBuilder($categoria)
            ->add('nmeCategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeCategoria']->getData();

            $categoria->setNmeCategoria($nome);

            $entityManager->persist($categoria);
            $entityManager->flush();

            $this->addFlash('notice', 'Categoria cadastrada!');
        }

        return $this->render('categoria/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/categorias", name="admin_categorias")
     */
    public function mostrarTodosCategoriasCadastrados()
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
        return $this->render('categoria/index.html.twig', array('categorias' => $categorias));
    }


    /**
     * @Route("/admin/categoria/editar/{id}", name="admin_categoria_editar")
     */
    public function editarCategoria($id, Request $request)
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        $categorias->setNmeCategoria($categorias->getNmeCategoria());

        $form = $this->createFormBuilder($categorias)
            ->add('nmeCategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeCategoria']->getData();

            $em = $this->getDoctrine()->getManager();
            $categorias = $em->getRepository(Categoria::class)->find($id);

            $categorias->setNmeCategoria($nome);

            $em->flush();

            $this->addFlash('notice', 'Categoria atualizada');
            return $this->redirectToRoute('admin_categorias');
        }
        return $this->render('categoria/editar.html.twig', array('categorias' => $categorias, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/categoria/detalhes/{id}", name="admin_categoria_detalhes")
     */
    public function detalhesCategoria($id)
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        return $this->render('categoria/detalhes.html.twig', array('categorias' => $categorias));

    }

    /**
     * @Route("/admin/categoria/deletar/{id}", name="admin_categoria_deletar")
     */
    public function deletarCategoria($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorias = $em->getRepository(Categoria::class)->find($id);

        $em->remove($categorias);
        $em->flush();
        $this->addFlash('notice', 'Categoria removida');
        return $this->redirectToRoute('admin_categorias');
    }
}
