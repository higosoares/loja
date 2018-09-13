<?php

namespace App\Controller\TipoPerfil;

use App\Entity\TipoPerfil;
use App\Form\TipoPerfilType;
use App\Repository\TipoPerfil\TipoPerfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/perfil")
 */
class TipoPerfilController extends Controller
{
    /**
     * @Route("/", name="tipo_perfil_index", methods="GET")
     */
    public function index(TipoPerfilRepository $tipoPerfilRepository): Response
    {
        return $this->render('tipo_perfil/index.html.twig', ['tipo_perfils' => $tipoPerfilRepository->findAll()]);
    }

    /**
     * @Route("/new", name="tipo_perfil_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $tipoPerfil = new TipoPerfil();
        $form = $this->createForm(TipoPerfilType::class, $tipoPerfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoPerfil);
            $em->flush();

            return $this->redirectToRoute('tipo_perfil_index');
        }

        return $this->render('tipo_perfil/new.html.twig', [
            'tipo_perfil' => $tipoPerfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTipoPerfil}", name="tipo_perfil_show", methods="GET")
     */
    public function show(TipoPerfil $tipoPerfil): Response
    {
        return $this->render('tipo_perfil/show.html.twig', ['tipo_perfil' => $tipoPerfil]);
    }

    /**
     * @Route("/{idTipoPerfil}/edit", name="tipo_perfil_edit", methods="GET|POST")
     */
    public function edit(Request $request, TipoPerfil $tipoPerfil): Response
    {
        $form = $this->createForm(TipoPerfilType::class, $tipoPerfil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_perfil_edit', ['idTipoPerfil' => $tipoPerfil->getIdTipoPerfil()]);
        }

        return $this->render('tipo_perfil/edit.html.twig', [
            'tipo_perfil' => $tipoPerfil,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTipoPerfil}", name="tipo_perfil_delete", methods="DELETE")
     */
    public function delete(Request $request, TipoPerfil $tipoPerfil): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoPerfil->getIdTipoPerfil(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoPerfil);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_perfil_index');
    }
}
