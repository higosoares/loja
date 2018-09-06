<?php

namespace App\Controller\Formapagamento;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Formapagamento;

class FormapagamentoController extends AbstractController
{
    /**
     * @Route("/formapagamento", name="formapamento")
     */
    public function mostrarFormaPagamento()
    {
        return $this->render('index.html.twig', [
        ]);
    }

    //Parte de admin

    /**
     * @Route("/admin/formapagamento/cadastrar", name="admin_cadastrar_formapagamento")
     */

    public function cadastrarFormapagamento(Request $request, EntityManagerInterface $entityManager)
    {
        $formapagamento = new Formapagamento();

        $form = $this->createFormBuilder($formapagamento)
            ->add('dscFormapagamento', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['dscFormapagamento']->getData();

            $formapagamento->setDscFormapagamento($nome);

            $entityManager->persist($formapagamento);
            $entityManager->flush();

            $this->addFlash('notice', 'Forma de pagamento Cadastrado!');
        }

        return $this->render('formapagamento/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/admin/formapagamentos", name="admin_formapagamentos")
     */
    public function mostrarTodasFormaspagamentoCadastrados()
    {
        $formapagamentos = $this->getDoctrine()->getRepository(Formapagamento::class)->findAll();
        return $this->render('formapagamento/index.html.twig', array('formapagamentos' => $formapagamentos));
    }


    /**
     * @Route("/admin/formapagamento/editar/{id}", name="admin_formapagamento_editar")
     */
    public function editarFormapagamento($id, Request $request, EntityManagerInterface $entityManager)
    {
        $formapagamento = $this->getDoctrine()->getRepository(Formapagamento::class)->find($id);
        $formapagamento->setDscFormapagamento($formapagamento->getDscFormapagamento());

        $form = $this->createFormBuilder($formapagamento)
            ->add('dscFormapagamento', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['dscFormapagamento']->getData();

            $formapagamento->setDscFormapagamento($nome);

            $entityManager->flush();

            $this->addFlash('notice', 'Forma de pagamento Atualizado');
            return $this->redirectToRoute('admin_formapagamentos');
        }
        return $this->render('formapagamento/editar.html.twig', array('formapagamentos' => $formapagamentos, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/formapagamento/detalhes/{id}", name="admin_formapagamento_detalhes")
     */
    public function detalhesFormapagamento($id)
    {
        $formapagamento = $this->getDoctrine()->getRepository(Formapagamento::class)->find($id);
        return $this->render('formapagamento/detalhes.html.twig', array('formapagamento' => $formapagamento));

    }

    /**
     * @Route("/admin/formapagamento/deletar/{id}", name="admin_formapagamento_deletar")
     */
    public function deletarFormapagamento($id, EntityManagerInterface $entityManager)
    {
        $formapagamento = $this->getDoctrine()->getRepository(Formapagamento::class)->find($id);

        $entityManager->remove($formapagamento);
        $entityManager->flush();
        $this->addFlash('notice', 'Forma de pagamento Removido');
        return $this->redirectToRoute('admin_formapagamentos');
    }
}
