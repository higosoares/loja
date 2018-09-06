<?php

namespace App\Controller\Subcategoria;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Subcategoria;
use App\Entity\CategoriaSubcategoria;
use App\Entity\Produto;

class SubcategoriaController extends AbstractController
{
    /**
     * @Route("/subcategoria/{id}", name="subcategoria")
     */
    public function mostrarSubcategoria($id)
    {
        $subcategoria = $this->getDoctrine()->getRepository(Subcategoria::class)->find($id);
        $categorias_subcategoria = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findBy(
            array('subcategoriaSubcategoria' => $subcategoria)
        );
        $produto = $this->getDoctrine()->getRepository(Produto::class)->findBy(
            array('codCategoriaSubcategoria' => $categorias_subcategoria)
        );
        return $this->render('subcategoria/subcategoria.html.twig', [
            'produto' => $produto
        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/subcategoria/cadastrar", name="admin_cadastrar_subcategoria")
     */

    public function cadastrarSubcategoria(Request $request, EntityManagerInterface $entityManager)
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

            $entityManager->persist($subcategoria);
            $entityManager->flush();

            $this->addFlash('notice', 'SubCategoria cadastrada!');
        }

        return $this->render('subcategoria/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/subcategorias", name="admin_subcategorias")
     */
    public function mostrarSubcategorias()
    {
        $subcategorias = $this->getDoctrine()->getRepository(Subcategoria::class)->findAll();
        return $this->render('subcategoria/index.html.twig', array('subcategorias' => $subcategorias));
    }


    /**
     * @Route("/admin/subcategoria/editar/{id}", name="admin_subcategoria_editar")
     */
    public function editarSubcategoria($id, Request $request, EntityManagerInterface $entityManager)
    {
        $subcategoria = $this->getDoctrine()->getRepository(Subcategoria::class)->find($id);
        $subcategoria->setNmeSubcategoria($subcategoria->getNmeSubcategoria());

        $form = $this->createFormBuilder($subcategoria)
            ->add('nmeSubcategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeSubcategoria']->getData();

            $subcategoria->setNmeSubcategoria($nome);

            $entityManager->flush();

            $this->addFlash('notice', 'SubCategoria atualizada');
            return $this->redirectToRoute('admin_subcategorias');
        }
        return $this->render('subcategoria/editar.html.twig', array('subcategoria' => $subcategoria, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/subcategoria/detalhes/{id}", name="admin_subcategoria_detalhes")
     */
    public function detalhesSubcategoria($id)
    {
        $subcategoria = $this->getDoctrine()->getRepository(Subcategoria::class)->find($id);
        return $this->render('subcategoria/detalhes.html.twig', array('subcategoria' => $subcategoria));

    }

    /**
     * @Route("/admin/subcategoria/deletar/{id}", name="admin_subcategoria_deletar")
     */
    public function deletarSubcategoria($id, EntityManagerInterface $entityManager)
    {
        $subcategoria = $this->getDoctrine()->getRepository(Subcategoria::class)->find($id);

        $entityManager->remove($subcategoria);
        $entityManager->flush();
        $this->addFlash('notice', 'SubCategoria Removida');
        return $this->redirectToRoute('admin_subcategorias');
    }
}
