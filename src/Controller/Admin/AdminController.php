<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 12/09/2018
 * Time: 17:57
 */

namespace App\Controller\Admin;


use App\Entity\Carrinho;
use App\Entity\CarrinhoProduto;
use App\Entity\Categoria;
use App\Entity\CategoriaSubcategoria;
use App\Entity\Cliente;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin")
     */
    public function index()
    {
        return $this->render('admin/admin.html.twig', [
        ]);
    }

    //Cliente

    /**
     * @Route("/cliente/cadastrar", name="admin_cadastrar_cliente")
     */

    public function cadastrarCliente(Request $request, EntityManagerInterface $entityManager)
    {
        $cliente = new Cliente();

        $form = $this->createFormBuilder($cliente)
            ->add('nomeCliente', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Nome', 'pattern' => '[a-z\s]+$', 'required' => 'required')))
            ->add('nmeSobrenomeCliente', TextType::class, array('label' => 'Sobrenome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Sobrenome', 'required' => 'required')))
            ->add('dtaNascCliente', DateType::class, array('label' => 'Data de Nascimento', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Data de Nascimento', 'required' => 'required')))
            ->add('emlCliente', EmailType::class, array('label' => 'E-mail', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'E-mail', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$', 'required' => 'required')))
            ->add('endCliente', TextType::class, array('label' => 'Endereço', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Endereço', 'required' => 'required')))
            ->add('telCliente', TextType::class, array('label' => 'Telefone', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Telefone', 'required' => 'required')))
            ->add('cpfCliente', TextType::class, array('label' => 'CPF', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'CPF', 'required' => 'required')))
            ->add('rgCliente', TextType::class, array('label' => 'RG', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'RG', 'required' => 'required')))
            ->add('pwdCliente', PasswordType::class, array('label' => 'Senha', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px', 'placeholder' => 'Senha', 'required' => 'required')))
            ->add('showPassword', ButtonType::class, array('label' => 'Mostrar/Esconder', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nomeCliente']->getData();
            $sobrenome = $form['nmeSobrenomeCliente']->getData();
            $dataNascimento = $form['dtaNascCliente']->getData();
            $email = $form['emlCliente']->getData();
            $endereco = $form['endCliente']->getData();
            $telefone = $form['telCliente']->getData();
            $cpf = $form['cpfCliente']->getData();
            $rg = $form['rgCliente']->getData();
            $senha = $form['pwdCliente']->getData();

            $cliente->setUsername($nome);
            $cliente->setNmeSobrenomeCliente($sobrenome);
            $cliente->setDtaNascCliente($dataNascimento);
            $cliente->setEmlCliente($email);
            $cliente->setEndCliente($endereco);
            $cliente->setTelCliente($telefone);
            $cliente->setCpfCliente($cpf);
            $cliente->setRgCliente($rg);
            $cliente->setPassword($senha);

            $entityManager->persist($cliente);
            $entityManager->flush();

            $this->addFlash('notice', 'Cliente cadastrado!');
        }

        return $this->render('cliente/admin_cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/clientes", name="admin_clientes")
     */
    public function mostrarClientes()
    {
        $clientes = $this->getDoctrine()->getRepository(Cliente::class)->findAll();
        return $this->render('cliente/admin_index.html.twig', array('clientes' => $clientes));
    }

    /**
     * @Route("/cliente/editar/{id}", name="admin_cliente_editar")
     */
    public function editarCliente($id, Request $request, EntityManagerInterface $entityManager)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);
        $cliente->setUsername($cliente->getUsername());
        $cliente->setNmeSobrenomeCliente($cliente->getNmeSobrenomeCliente());
        $cliente->setDtaNascCliente($cliente->getDtaNascCliente());
        $cliente->setEmlCliente($cliente->getEmlCliente());
        $cliente->setEndCliente($cliente->getEndCliente());
        $cliente->setTelCliente($cliente->getTelCliente());
        $cliente->setCpfCliente($cliente->getCpfCliente());
        $cliente->setRgCliente($cliente->getRgCliente());
        $cliente->setPassword($cliente->getPassword());


        $form = $this->createFormBuilder($cliente)
            ->add('userName', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('nmeSobrenomeCliente', TextType::class, array('label' => 'Sobrenome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('dtaNascCliente', TextType::class, array('label' => 'Data de Nascimento', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('emlCliente', EmailType::class, array('label' => 'E-mail', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('endCliente', TextType::class, array('label' => 'Endereço', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('telCliente', TextType::class, array('label' => 'Telefone', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('cpfCliente', TextType::class, array('label' => 'CPF', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('rgCliente', TextType::class, array('label' => 'RG', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('password', TextType::class, array('label' => 'Senha', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['userName']->getData();
            $sobrenome = $form['nmeSobrenomeCliente']->getData();
            $dataNascimento = $form['dtaNascCliente']->getData();
            $email = $form['emlCliente']->getData();
            $endereco = $form['endCliente']->getData();
            $telefone = $form['telCliente']->getData();
            $cpf = $form['cpfCliente']->getData();
            $rg = $form['rgCliente']->getData();
            $senha = $form['pwdCliente']->getData();

            $cliente->setUsername($nome);
            $cliente->setNmeSobrenomeCliente($sobrenome);
            $cliente->setDtaNascCliente($dataNascimento);
            $cliente->setEmlCliente($email);
            $cliente->setEndCliente($endereco);
            $cliente->setTelCliente($telefone);
            $cliente->setCpfCliente($cpf);
            $cliente->setRgCliente($rg);
            $cliente->setPassword($senha);

            $entityManager->flush();

            $this->addFlash('notice', 'Cliente atualizado');
            return $this->redirectToRoute('admin_clientes');
        }
        return $this->render('cliente/admin_editar.html.twig', array('cliente' => $cliente, 'form' => $form->createView()));
    }


    /**
     * @Route("/cliente/detalhes/{id}", name="admin_cliente_detalhes")
     */
    public function detalharCliente($id)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);
        return $this->render('cliente/admin_detalhes.html.twig', array('cliente' => $cliente));

    }

    /**
     * @Route("/cliente/deletar/{id}", name="admin_cliente_deletar")
     */
    public function deletarCliente($id, EntityManagerInterface $entityManager)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);

        $entityManager->remove($cliente);
        $entityManager->flush();
        $this->addFlash('notice', 'Cliente removido');
        return $this->redirectToRoute('admin_clientes');
    }

    //Carrinho

    /**
     * @Route("/carrinho/cadastrar", name="admin_cadastrar_carrinho")
     */

    public function cadastrarCarrinho(Request $request, EntityManagerInterface $entityManager)
    {
        $carrinho = new Carrinho();

        $form = $this->createFormBuilder($carrinho)
            ->add('codCliente', EntityType::class, array('class' => Cliente::class, 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCliente = $form['codCliente']->getData();

            $carrinho->setCodCliente($codCliente);

            $entityManager->persist($carrinho);
            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho cadastrado!');
        }

        return $this->render('carrinho/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/carrinhos", name="admin_carrinhos")
     */
    public function mostrarCarrinhos()
    {
        $carrinhos = $this->getDoctrine()->getRepository(Carrinho::class)->findAll();
        return $this->render('carrinho/index.html.twig', array('carrinhos' => $carrinhos));
    }


    /**
     * @Route("/admin/carrinho/editar/{id}", name="admin_carrinho_editar")
     */
    public function editarCarrinho($id, Request $request, EntityManagerInterface $entityManager)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);
        $carrinho->setCodCliente($carrinho->getCodCliente());

        $form = $this->createFormBuilder($carrinho)
            ->add('codCliente', EntityType::class, array('class' => Cliente::class, 'choice_label' => 'nomeCliente', 'label' => 'Cliente', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCliente = $form['codCliente']->getData();

            $carrinho->setCodCliente($codCliente);

            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho atualizado');
            return $this->redirectToRoute('admin_carrinhos');
        }
        return $this->render('carrinho/editar.html.twig', array('carrinho' => $carrinho, 'form' => $form->createView()));
    }


    /**
     * @Route("/carrinho/detalhes/{id}", name="admin_carrinho_detalhes")
     */
    public function detalhesCarrinho($id)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);
        return $this->render('carrinho/detalhes.html.twig', array('carrinho' => $carrinho));

    }

    /**
     * @Route("/carrinho/deletar/{id}", name="admin_carrinho_deletar")
     */
    public function deletarCarrinho($id, EntityManagerInterface $entityManager)
    {
        $carrinho = $this->getDoctrine()->getRepository(Carrinho::class)->find($id);

        $entityManager->remove($carrinho);
        $entityManager->flush();
        $this->addFlash('notice', 'Carrinho removido');
        return $this->redirectToRoute('admin_carrinhos');
    }

    //Carrinho Produto

    /**
     * @Route("/carrinhoproduto/cadastrar", name="admin_cadastrar_carrinhoproduto")
     */

    public function cadastrarCarrinhoProduto(Request $request, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = new CarrinhoProduto();

        $form = $this->createFormBuilder($carrinhoproduto)
            ->add('codCarrinho', EntityType::class, array('class' => Carrinho::class, 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codProduto', EntityType::class, array('class' => Produto::class, 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCarrinho = $form['codCarrinho']->getData();
            $codProduto = $form['codProduto']->getData();

            $carrinhoproduto->setCodCarrinho($codCarrinho);
            $carrinhoproduto->setCodProduto($codProduto);

            $entityManager->persist($carrinhoproduto);
            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho produto cadastrado!');
        }

        return $this->render('carrinho/produto/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/carrinhoprodutos", name="admin_carrinhoprodutos")
     */
    public function mostrarCarrinhoProdutos()
    {
        $carrinhoprodutos = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->findAll();
        return $this->render('carrinho/produto/index.html.twig', array('carrinhoprodutos' => $carrinhoprodutos));
    }


    /**
     * @Route("/carrinhoproduto/editar/{id}", name="admin_carrinhoproduto_editar")
     */
    public function editarCarrinhoProduto($id, Request $request, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);
        $carrinhoproduto->setCodCarrinho($carrinhoproduto->getCodCarrinho());
        $carrinhoproduto->setCodProduto($carrinhoproduto->getCodProduto());

        $form = $this->createFormBuilder($carrinhoproduto)
            ->add('codCarrinho', EntityType::class, array('class' => Carrinho::class, 'choice_label' => 'idCarrinho', 'label' => 'Carrinho', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('codProduto', EntityType::class, array('class' => Produto::class, 'choice_label' => 'nmeProduto', 'label' => 'Produto', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codCarrinho = $form['codCarrinho']->getData();
            $codProduto = $form['codProduto']->getData();

            $carrinhoproduto->setCodCarrinho($codCarrinho);
            $carrinhoproduto->setCodProduto($codProduto);

            $entityManager->flush();

            $this->addFlash('notice', 'Carrinho Produto atualizado');
            return $this->redirectToRoute('admin_carrinhoprodutos');
        }
        return $this->render('carrinho/produto/editar.html.twig', array('carrinhoproduto' => $carrinhoproduto, 'form' => $form->createView()));
    }


    /**
     * @Route("/carrinhoproduto/detalhes/{id}", name="admin_carrinhoproduto_detalhes")
     */
    public function detalhesCarrinhoProduto($id)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);
        return $this->render('carrinho/produto/detalhes.html.twig', array('carrinhoproduto' => $carrinhoproduto));

    }

    /**
     * @Route("/carrinhoproduto/deletar/{id}", name="admin_carrinhoproduto_deletar")
     */
    public function deletarCarrinhoProduto($id, EntityManagerInterface $entityManager)
    {
        $carrinhoproduto = $this->getDoctrine()->getRepository(CarrinhoProduto::class)->find($id);

        $entityManager->remove($carrinhoproduto);
        $entityManager->flush();
        $this->addFlash('notice', 'Carrinho produto removido');
        return $this->redirectToRoute('admin_carrinhoprodutos');
    }

    //Categoria

    /**
     * @Route("/categoria/cadastrar", name="admin_cadastrar_categoria")
     */

    public function cadastrarCategoria(Request $request, EntityManagerInterface $entityManager)
    {

        $categoria = new Categoria();

        $form = $this->createFormBuilder($categoria)
            ->add('nmeCategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeCategoria']->getData();

            $categoria->setNmeCategoria($nome);

            $entityManager->persist($categoria);
            $entityManager->flush();

            $this->addFlash('notice', 'Categoria cadastrada!');
        }

        return $this->render('categoria/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/categorias", name="admin_categorias")
     */
    public function mostrarTodosCategoriasCadastrados()
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->findAll();
        return $this->render('categoria/index.html.twig', array('categorias' => $categorias));
    }


    /**
     * @Route("/categoria/editar/{id}", name="admin_categoria_editar")
     */
    public function editarCategoria($id, Request $request)
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        $categorias->setNmeCategoria($categorias->getNmeCategoria());

        $form = $this->createFormBuilder($categorias)
            ->add('nmeCategoria', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nome = $form['nmeCategoria']->getData();

            $em = $this->getDoctrine()->getManager();
            $categorias = $em->getRepository(Categoria::class)->find($id);

            $categorias->setNmeCategoria($nome);

            $em->flush();

            $this->addFlash('notice', 'Categoria atualizada');
            return $this->redirectToRoute('admin_categorias');
        }
        return $this->render('categoria/editar.html.twig', array('categorias' => $categorias, 'form' => $form->createView()));
    }


    /**
     * @Route("/categoria/detalhes/{id}", name="admin_categoria_detalhes")
     */
    public function detalhesCategoria($id)
    {
        $categorias = $this->getDoctrine()->getRepository(Categoria::class)->find($id);
        return $this->render('categoria/detalhes.html.twig', array('categorias' => $categorias));

    }

    /**
     * @Route("/categoria/deletar/{id}", name="admin_categoria_deletar")
     */
    public function deletarCategoria($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorias = $em->getRepository(Categoria::class)->find($id);

        $em->remove($categorias);
        $em->flush();
        $this->addFlash('notice', 'Categoria removida');
        return $this->redirectToRoute('admin_categorias');
    }
    
    //Categoria SubCategoria

    /**
     * @Route("/categoriasubcategoria/cadastrar", name="admin_cadastrar_categoriasubcategoria")
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
     * @Route("/categoriasubcategorias", name="admin_categoriasubcategorias")
     */
    public function mostrarTodasCategoriaSubcategoriasCadastradas()
    {
        $categoriasubcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->findAll();
        return $this->render('categoria/subcategoria/index.html.twig', array('categoriasubcategorias' => $categoriasubcategorias));
    }


    /**
     * @Route("/categoriasubcategoria/editar/{id}", name="admin_categoriasubcategoria_editar")
     */
    public function editarCategoriaSubcategoria($id, Request $request)
    {
        $categoriasubcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->find($id);
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
            $categoriasubcategorias= $em->getRepository(CategoriaSubcategoria::class)->find($id);

            $categoriasubcategorias->setCategoriaCategoria($codcategoria);
            $categoriasubcategorias->setSubcategoriaSubcategoria($codsubcategoria);

            $em->flush();

            $this->addFlash('notice', 'Categoria subcategoria atualizada');
            return $this->redirectToRoute('admin_categoriasubcategorias');
        }
        return $this->render('categoria/subcategoria/editar.html.twig', array('categoriasubcategorias' => $categoriasubcategorias, 'form' => $form->createView()));
    }


    /**
     * @Route("/categoriasubcategoria/detalhes/{id}", name="admin_categoriasubcategoria_detalhes")
     */
    public function detalhesCategoriaSubcategoria($id)
    {
        $categoriasubcategorias = $this->getDoctrine()->getRepository(CategoriaSubcategoria::class)->find($id);
        return $this->render('categoria/subcategoria/detalhes.html.twig', array('categoriasubcategorias' => $categoriasubcategorias));

    }

    /**
     * @Route("/categoriasubcategoria/deletar/{id}", name="admin_categoriasubcategoria_deletar")
     */
    public function deletarCategoriaSubcategoria($id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoriasubcategorias = $em->getRepository(CategoriaSubcategoria::class)->find($id);

        $em->remove($categoriasubcategorias);
        $em->flush();
        $this->addFlash('notice', 'Categoria subcategoria removida');
        return $this->redirectToRoute('admin_categoriasubcategorias');
    }

}