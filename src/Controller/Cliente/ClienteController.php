<?php

namespace App\Controller\Cliente;

use App\Exception\LojaExcetion;
use App\Service\ClienteService;
use App\Helpers\Campos;
use JMS\Serializer\SerializerBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use App\Entity\Cliente;


class ClienteController extends AbstractController
{
    /**
     * @var ClienteService
     */
    protected $clienteService;

    /**
     * @var Campos
     */
    public $campos;


    public function __construct(ClienteService $clienteService, Campos $campos)
    {
        $this->clienteService = $clienteService;
        $this->campos = $campos;
    }

    /**
     * @Route("/cliente/cadastrar", methods={"POST"})
     */
    public function cadastrar(Request $request, EntityManagerInterface $entityManager)
    {
        $entityManager->getConnection()->beginTransaction();
        try {
            $params = new \stdClass();
            $params->nome_cliente = $request->get('nome_cliente');
            $params->nme_sobrenome_cliente = $request->get('nme_sobrenome_cliente');
            $params->dta_nasc_cliente = $request->get('dta_nasc_cliente');
            $params->eml_cliente = $request->get('eml_cliente');
            $params->end_cliente = $request->get('end_cliente');
            $params->tel_cliente = $request->get('tel_cliente');
            $params->cpf_cliente = $this->campos->removeMascaraCPF($request->get('cpf_cliente'));
            $params->rg_cliente = $request->get('rg_cliente');
            $params->pwd_cliente = $request->get('pwd_cliente');
            $cliente = $this->clienteService->cadastrar($params, $entityManager);
            $retorno = [
                'status' => 201,
                'resultado' => $cliente
            ];
            $entityManager->getConnection()->commit();
        } catch(LojaExcetion $e) {
            $entityManager->getConnection()->rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($retorno, 'json');
        return new Response($jsonContent);
    }

    /**
     * @Route("/cliente/editar", methods={"POST"}, name="cliente_editar")
     */
    public function editar(Request $request, EntityManagerInterface $entityManager)
    {
        $entityManager->getConnection()->beginTransaction();
        try {
            $params = new \stdClass();
            $params->nome_cliente = $request->get('nome_cliente');
            $params->nme_sobrenome_cliente = $request->get('nme_sobrenome_cliente');
            $params->dta_nasc_cliente = $request->get('dta_nasc_cliente');
            $params->eml_cliente = $request->get('eml_cliente');
            $params->end_cliente = $request->get('end_cliente');
            $params->tel_cliente = $request->get('tel_cliente');
            $params->cpf_cliente = $this->campos->removeMascaraCPF($request->get('cpf_cliente'));
            $params->rg_cliente = $request->get('rg_cliente');
            $params->pwd_cliente = $request->get('pwd_cliente');
            $cliente = $this->clienteService->editar($request->get('id_cliente'), $params, $entityManager);
            $retorno = [
                'status' => 201,
                'resultado' => $cliente
            ];
            $entityManager->getConnection()->commit();
        } catch(LojaExcetion $e) {
            $entityManager->getConnection()->rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        $serializer = SerializerBuilder::create()->build();
        $jsonContent = $serializer->serialize($retorno, 'json');
        return new Response($jsonContent);
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function mostrarRegistro(Request $request, EntityManagerInterface $entityManager)
    {
        $cliente = new Cliente();

        $form = $this->createFormBuilder($cliente)
            ->add('nomeCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu nome', 'pattern' => '[a-z\s]+$', 'required' => 'required')))
            ->add('nmeSobrenomeCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu sobrenome', 'required' => 'required')))
            ->add('dtaNascCliente', DateType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite sua data de nascimento', 'required' => 'required')))
            ->add('emlCliente', EmailType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu e-mail', 'pattern' => '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$', 'required' => 'required')))
            ->add('endCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu endereço', 'required' => 'required')))
            ->add('telCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu telefone', 'required' => 'required')))
            ->add('cpfCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu CPF', 'required' => 'required')))
            ->add('rgCliente', TextType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite seu RG', 'required' => 'required')))
            ->add('pwdCliente', PasswordType::class, array('label' => false, 'attr' => array('class' => 'user', 'placeholder' => 'Digite sua senha', 'required' => 'required')))
            ->add('save', SubmitType::class, array('label' => 'Cadastrar'))
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

        return $this->render('cliente/cadastro.html.twig', array(
            'form' => $form->createView(),
        ));

    }


    public function mostrarPerfil()
    {
//      if (isset($_POST["login"]))
//      {
//        $em = $this->getDoctrine()->getManager();
//        $user = $em->getRepository(Cliente::class)->findBy(array ('emlCliente' => $_POST['email'], 'pwdCliente' => $_POST['password']));
//        foreach($user as $key => $value){
//
//        }
//
//        if (!empty($user))
//        {
//          $this->addFlash('notice', 'Logado com sucesso!');
//          $session = $_SESSION['userlogged'] = $value->getNomeCliente();
//
//          return $this->render('cliente/perfil.html.twig', array('users' => $user, 'sessions' => $session
//          ));
//        }
//
//        $this->addFlash('error', 'Erro ao logar!');
//        return $this->redirectToRoute('login');
//
//      }
//
//      $this->addFlash('error', 'Precisa logar para acesso a página!');
//      return $this->redirectToRoute('login');

        return $this->render('cliente/perfil.html.twig', array());
    }

    /**
     * @Route("/sair" ,name="logout")
     */
    public function logoutAction()
    {
//        session_destroy();
//        return $this->redirectToRoute('login');
    }

    //Parte de admin

    /**
     * @Route("/admin/cliente/cadastrar", name="admin_cadastrar_cliente")
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

        return $this->render('cliente/cadastrar.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/admin/clientes", name="admin_clientes")
     */
    public function mostrarClientes()
    {
        $clientes = $this->getDoctrine()->getRepository(Cliente::class)->findAll();
        return $this->render('cliente/index.html.twig', array('clientes' => $clientes));
    }

    /**
     * @Route("/admin/cliente/editar/{id}", name="admin_cliente_editar")
     */
    public function editarCliente($id, Request $request, EntityManagerInterface $entityManager)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);
        $cliente->setNomeCliente($cliente->getNomeCliente());
        $cliente->setNmeSobrenomeCliente($cliente->getNmeSobrenomeCliente());
        $cliente->setDtaNascCliente($cliente->getDtaNascCliente());
        $cliente->setEmlCliente($cliente->getEmlCliente());
        $cliente->setEndCliente($cliente->getEndCliente());
        $cliente->setTelCliente($cliente->getTelCliente());
        $cliente->setCpfCliente($cliente->getCpfCliente());
        $cliente->setRgCliente($cliente->getRgCliente());
        $cliente->setPwdCliente($cliente->getPwdCliente());


        $form = $this->createFormBuilder($cliente)
            ->add('nomeCliente', TextType::class, array('label' => 'Nome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('nmeSobrenomeCliente', TextType::class, array('label' => 'Sobrenome', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('dtaNascCliente', DateType::class, array('label' => 'Data de Nascimento', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('emlCliente', EmailType::class, array('label' => 'E-mail', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('endCliente', TextType::class, array('label' => 'Endereço', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('telCliente', TextType::class, array('label' => 'Telefone', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('cpfCliente', TextType::class, array('label' => 'CPF', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('rgCliente', TextType::class, array('label' => 'RG', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('pwdCliente', TextType::class, array('label' => 'Senha', 'attr' => array('class' => 'form-control form-control-login', 'style' => 'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label' => 'Editar', 'attr' => array('class' => 'btn btn-default', 'style' => 'margin-left:30%')))
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

            $cliente->setNomeCliente($nome);
            $cliente->setNmeSobrenomeCliente($sobrenome);
            $cliente->setDtaNascCliente($dataNascimento);
            $cliente->setEmlCliente($email);
            $cliente->setEndCliente($endereco);
            $cliente->setTelCliente($telefone);
            $cliente->setCpfCliente($cpf);
            $cliente->setRgCliente($rg);
            $cliente->setPwdCliente($senha);

            $entityManager->flush();

            $this->addFlash('notice', 'Cliente atualizado');
            return $this->redirectToRoute('admin_clientes');
        }
        return $this->render('cliente/editar.html.twig', array('cliente' => $cliente, 'form' => $form->createView()));
    }


    /**
     * @Route("/admin/cliente/detalhes/{id}", name="admin_cliente_detalhes")
     */
    public function detalharCliente($id)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);
        return $this->render('cliente/detalhes.html.twig', array('cliente' => $cliente));

    }

    /**
     * @Route("/admin/cliente/deletar/{id}", name="admin_cliente_deletar")
     */
    public function deletarCliente($id, EntityManagerInterface $entityManager)
    {
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);

        $entityManager->remove($cliente);
        $entityManager->flush();
        $this->addFlash('notice', 'Cliente removido');
        return $this->redirectToRoute('admin_clientes');
    }
}
