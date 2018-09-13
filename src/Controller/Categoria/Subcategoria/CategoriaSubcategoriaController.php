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

}
