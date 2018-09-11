<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 03/09/2018
 * Time: 22:16
 */

namespace App\Controller\Perfil;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cliente;

class PerfilController extends AbstractController
{
    /**
     * @Route("/perfil" ,name="perfil")
     */
    public function mostrarPerfil()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        return $this->render('cliente/perfil.html.twig', array('cliente' => $user));
    }
}