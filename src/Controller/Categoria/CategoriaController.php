<?php

namespace App\Controller\Categoria;

use App\Entity\CategoriaSubcategoria;
use App\Entity\Subcategoria;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Categoria;
use App\Entity\Produto;

class CategoriaController extends AbstractController
{
    /**
     * @Route("/categoria/{id}", name="categoria_detalhes")
     */
    public function mostra_categoria_loja($id)
    {
        $categoria_subcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findBy(array('categoriaCategoria' => $id));
        //var_dump($categoria_subcategoria);
        $produtos = $this->getDoctrine()->getRepository(Produto::class )->findBy(array('codCategoriaSubcategoria' => $categoria_subcategorias));
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


}
