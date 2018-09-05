<?php

namespace App\Controller\Subcategoria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Subcategoria;
use App\Entity\CategoriaSubcategoria;

class SubcategoriaController extends AbstractController
{
    /**
     * @Route("/subcategoria/{id}", name="subcategoria")
     */
    public function mostrarSubcategoria($id)
    {
        $subcategorias = $this->getDoctrine()->getRepository(Subcategoria::class)->find($id);
        $categorias_subcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findBy(
            array('subcategoriaSubcategoria' => $subcategorias)
        );
        $produtos = $this->getDoctrine()->getRepository('App:Produto')->findBy(
            array('codCategoriaSubcategoria' => $categorias_subcategorias)
        );
        return $this->render('subcategoria/subcategoria.html.twig', [
            'produtos' => $produtos
        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/subcategoria/cadastrar", name="admin_cadastrar_subcategoria")
     */

    public function cadastrarSubcategoria(Request $request)
    {
      $subcategoria = new Subcategoria();


      $form = $this->createFormBuilder($subcategoria)
      ->add('nmeSubcategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $nome = $form['nmeSubcategoria']->getData();

        $subcategoria->setNmeSubcategoria($nome);

        $em = $this->getDoctrine()->getManager();

        $em->persist($subcategoria);
        $em->flush();

        $this->addFlash('notice', 'SubCategoria cadastrada!');
      }

      return $this->render('subcategoria/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/subcategorias", name="admin_subcategorias")
     */
    public function mostrarTodasSubcategoriasCadastradas()
    {
      $subcategorias = $this->getDoctrine()->getRepository('App:SubCategoria')->findAll();
      return $this->render('subcategoria/index.html.twig', array('subcategorias' => $subcategorias));
    }


    /**
     * @Route("/admin/subcategoria/editar/{id}", name="admin_subcategoria_editar")
     */
    public function editarSubcategoria($id, Request $request)
    {
      $subcategorias = $this->getDoctrine()->getRepository('App:SubCategoria')->find($id);
      $subcategorias->setNmeSubcategoria($subcategorias->getNmeSubcategoria());

      $form = $this->createFormBuilder($subcategorias)
      ->add('nmeSubcategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $nome = $form['nmeSubcategoria']->getData();

        $em = $this->getDoctrine()->getManager();
        $subcategorias= $em->getRepository('App:SubCategoria')->find($id);

        $subcategorias->setNmeSubcategoria($nome);

        $em->flush();

        $this->addFlash('notice', 'SubCategoria atualizada');
        return $this->redirectToRoute('admin_subcategorias');
      }
      return $this->render('subcategoria/editar.html.twig', array('subcategorias' => $subcategorias, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/subcategoria/detalhes/{id}", name="admin_subcategoria_detalhes")
     */
    public function detalhesSubcategoria($id)
    {
      $subcategorias = $this->getDoctrine()->getRepository('App:SubCategoria')->find($id);
      return $this->render('subcategoria/detalhes.html.twig', array('subcategorias' => $subcategorias));

    }

    /**
     * @Route("/admin/subcategoria/deletar/{id}", name="admin_subcategoria_deletar")
     */
    public function deletarSubcategoria($id)
    {
      $em = $this->getDoctrine()->getManager();
      $subcategorias = $em->getRepository('App:SubCategoria')->find($id);

      $em->remove($subcategorias);
      $em->flush();
      $this->addFlash('notice', 'SubCategoria Removida');
      return $this->redirectToRoute('admin_subcategorias');
    }
}
