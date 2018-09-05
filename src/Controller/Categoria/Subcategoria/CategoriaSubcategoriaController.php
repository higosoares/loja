<?php

namespace App\Controller\Categoria\Subcategoria;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\CategoriaSubcategoria;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CategoriaSubcategoriaController extends Controller
{
    /**
     * @Route("/categoriasubcategoria/{id}", name="categoriasubcategoria")
     */
    public function mostrarCategoriaSubcategoria($id)
    {
      $categoriasubcategorias = $this->getDoctrine()->getRepository('App:CategoriaSubcategoria')->find($id);
      return array('categoriasubcategorias' => $categoriasubcategorias);
    }

    //Parte de admin

    /**
     * @Route("/admin/categoriasubcategoria/cadastrar", name="admin_cadastrar_categoriasubcategoria")
     */

    public function cadastrarCategoriaSubcategoria(Request $request)
    {
      $categoriasubcategoria = new CategoriaSubcategoria();


      $form = $this->createFormBuilder($categoriasubcategoria)
      ->add('categoriaCategoria', EntityType::class, array( 'class' => 'App:Categoria', 'choice_label' => 'nmeCategoria', 'label' => 'Categoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('subcategoriaSubcategoria', EntityType::class, array( 'class' => 'App:SubCategoria', 'choice_label' => 'nmeSubcategoria', 'label' => 'SubCategoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $codcategoria = $form['categoriaCategoria']->getData();
        $codsubcategoria = $form['subcategoriaSubcategoria']->getData();

        $categoriasubcategoria->setCategoriaCategoria($codcategoria);
        $categoriasubcategoria->setSubcategoriaSubcategoria($codsubcategoria);

        $em = $this->getDoctrine()->getManager();

        $em->persist($categoriasubcategoria);
        $em->flush();

        $this->addFlash('notice', 'Categoria subcategoria cadastrada!');
      }

      return $this->render('categoria/subcategoria/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/categoriasubcategorias", name="admin_categoriasubcategorias")
     */
    public function mostrarTodasCategoriaSubcategoriasCadastradas()
    {
      $categoriasubcategorias = $this->getDoctrine()->getRepository('App:CategoriaSubcategoria')->findAll();
      return $this->render('categoria/subcategoria/index.html.twig', array('categoriasubcategorias' => $categoriasubcategorias));
    }


    /**
     * @Route("/admin/categoriasubcategoria/editar/{id}", name="admin_categoriasubcategoria_editar")
     */
    public function editarCategoriaSubcategoria($id, Request $request)
    {
      $categoriasubcategorias = $this->getDoctrine()->getRepository('App:CategoriaSubcategoria')->find($id);
      $categoriasubcategorias->setCategoriaCategoria($categoriasubcategorias->getCategoriaCategoria());
      $categoriasubcategorias->setSubcategoriaSubcategoria($categoriasubcategorias->getSubcategoriaSubcategoria());

      $form = $this->createFormBuilder($categoriasubcategorias)
      ->add('categoriaCategoria', EntityType::class, array( 'class' => 'App:Categoria', 'choice_label' => 'nmeCategoria', 'label' => 'Categoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('subcategoriaSubcategoria', EntityType::class, array( 'class' => 'App:SubCategoria', 'choice_label' => 'nmeSubcategoria', 'label' => 'SubCategoria', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $codcategoria = $form['categoriaCategoria']->getData();
        $codsubcategoria = $form['subcategoriaSubcategoria']->getData();

        $em = $this->getDoctrine()->getManager();
        $categoriasubcategorias= $em->getRepository('App:CategoriaSubcategoria')->find($id);

        $categoriasubcategorias->setCategoriaCategoria($codcategoria);
        $categoriasubcategorias->setSubcategoriaSubcategoria($codsubcategoria);

        $em->flush();

        $this->addFlash('notice', 'Categoria subcategoria atualizada');
        return $this->redirectToRoute('admin_categoriasubcategorias');
      }
      return $this->render('categoria/subcategoria/editar.html.twig', array('categoriasubcategorias' => $categoriasubcategorias, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/categoriasubcategoria/detalhes/{id}", name="admin_categoriasubcategoria_detalhes")
     */
    public function detalhesCategoriaSubcategoria($id)
    {
      $categoriasubcategorias = $this->getDoctrine()->getRepository('App:CategoriaSubcategoria')->find($id);
      return $this->render('categoria/subcategoria/detalhes.html.twig', array('categoriasubcategorias' => $categoriasubcategorias));

    }

    /**
     * @Route("/admin/categoriasubcategoria/deletar/{id}", name="admin_categoriasubcategoria_deletar")
     */
    public function deletarCategoriaSubcategoria($id)
    {
      $em = $this->getDoctrine()->getManager();
      $categoriasubcategorias = $em->getRepository('App:CategoriaSubcategoria')->find($id);

      $em->remove($categoriasubcategorias);
      $em->flush();
      $this->addFlash('notice', 'Categoria subcategoria removida');
      return $this->redirectToRoute('admin_categoriasubcategorias');
    }
}
