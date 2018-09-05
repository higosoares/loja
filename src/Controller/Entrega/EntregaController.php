<?php

namespace App\Controller\Entrega;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\Entrega;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntregaController extends Controller
{
    /**
     * @Route("/entrega", name="entrega")
     */
    public function mostrarEntrega()
    {

        return $this->render('index.html.twig', [

        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/entrega/cadastrar", name="admin_cadastrar_entrega")
     */

    public function cadastrarEntrega(Request $request)
    {
      $entrega = new entrega();


      $form = $this->createFormBuilder($entrega)
      ->add('codCompra', EntityType::class, array( 'class' => 'App:Compra', 'choice_label' => 'idCompra', 'label' => 'Compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('stsEntrega', ChoiceType::class, array('choices' => array('Entregue' => true, 'Não Entregue' => false),'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $stsEntrega = $form['stsEntrega']->getData();
        $codCompra = $form['codCompra']->getData();

        $entrega->getStsEntrega($stsEntrega);
        $entrega->setCodCompra($codCompra);

        $em = $this->getDoctrine()->getManager();

        $em->persist($entrega);
        $em->flush();

        $this->addFlash('notice', 'Entrega cadastrada!');
      }

      return $this->render('entrega/cadastrar.html.twig', array(
          'form' => $form->createView(),
      ));

    }


    /**
     * @Route("/admin/entregas", name="admin_entregas")
     */
    public function mostrarTodasEntregasCadastradas()
    {
      $entregas = $this->getDoctrine()->getRepository('App:Entrega')->findAll();
      return $this->render('entrega/index.html.twig', array('entregas' => $entregas));
    }


    /**
     * @Route("/admin/entrega/editar/{id}", name="admin_entrega_editar")
     */
    public function editarEntrega($id, Request $request)
    {
      $entregas = $this->getDoctrine()->getRepository('App:Entrega')->find($id);
      $entregas->getStsEntrega($entregas->getStsEntrega());
      $entregas->setCodCompra($entregas->getCodCompra());

      $form = $this->createFormBuilder($entregas)
      ->add('codCompra', EntityType::class, array( 'class' => 'App:Compra', 'choice_label' => 'idCompra', 'label' => 'Compra', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('stsEntrega', ChoiceType::class, array('choices' => array('Entregue' => true, 'Não Entregue' => false),'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
      ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $stsEntrega = $form['stsEntrega']->getData();
        $codCompra = $form['codCompra']->getData();

        $em = $this->getDoctrine()->getManager();
        $entregas= $em->getRepository('App:Entrega')->find($id);

        $entregas->getStsEntrega($stsEntrega);
        $entregas->setCodCompra($codCompra);

        $em->flush();

        $this->addFlash('notice', 'Entrega atualizada');
        return $this->redirectToRoute('admin_entregas');
      }
      return $this->render('entrega/editar.html.twig', array('entregas' => $entregas, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/entrega/detalhes/{id}", name="admin_entrega_detalhes")
     */
    public function detalhesEntrega($id)
    {
      $entregas = $this->getDoctrine()->getRepository('App:Entrega')->find($id);
      return $this->render('entrega/detalhes.html.twig', array('entregas' => $entregas));

    }

    /**
     * @Route("/admin/entrega/deletar/{id}", name="admin_entrega_deletar")
     */
    public function deletarEntrega($id)
    {
      $em = $this->getDoctrine()->getManager();
      $entregas = $em->getRepository('App:Entrega')->find($id);

      $em->remove($entregas);
      $em->flush();
      $this->addFlash('notice', 'Entrega removida');
      return $this->redirectToRoute('admin_entregas');
    }
}
