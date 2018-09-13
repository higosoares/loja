<?php

namespace App\Controller;

use App\Entity\Perfil;
use App\Form\PerfilType;
use App\Repository\Perfil\PerfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/perfil2")
 */
class PerfilController extends Controller
{
    /**
     * @Route("/", name="perfil_index", methods="GET")
     */
    public function index(PerfilRepository $perfilRepository): Response
    {
        return $this->render('perfil/index.html.twig', ['perfils' => $perfilRepository->findAll()]);
    }

    /**
     * @Route("/new", name="perfil_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $perfil = new Perfil();
        $form = $this->createForm(PerfilType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($perfil);
            $em->flush();

            return $this->redirectToRoute('perfil_index');
        }

        return $this->render('perfil/new.html.twig', [
            'perfil' => $perfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="perfil_show", methods="GET")
     */
    public function show(Perfil $perfil): Response
    {
        return $this->render('perfil/show.html.twig', ['perfil' => $perfil]);
    }

    /**
     * @Route("/{id}/edit", name="perfil_edit", methods="GET|POST")
     */
    public function edit(Request $request, Perfil $perfil): Response
    {
        $form = $this->createForm(PerfilType::class, $perfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('perfil_edit', ['id' => $perfil->getId()]);
        }

        return $this->render('perfil/edit.html.twig', [
            'perfil' => $perfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="perfil_delete", methods="DELETE")
     */
    public function delete(Request $request, Perfil $perfil): Response
    {
        if ($this->isCsrfTokenValid('delete'.$perfil->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($perfil);
            $em->flush();
        }

        return $this->redirectToRoute('perfil_index');
    }
}
