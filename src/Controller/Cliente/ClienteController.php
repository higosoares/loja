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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use App\Entity\Cliente;


/**
 * @Route("/cliente")
 */
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
     * @Route("/cadastro", methods={"GET"}, name="cliente_cadastro")
     */
    public function formularioCadastro()
    {
        return $this->render('cliente/cadastro.html.twig');
    }

    /**
     * @Route("/cadastrar", methods={"POST"}, name="cliente_cadastrar")
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
            $params->tel_cliente = $this->campos->removeMascara($request->get('tel_cliente'));
            $params->cpf_cliente = $this->campos->removeMascara($request->get('cpf_cliente'));
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
     * @Route("/editar", methods={"POST", "PUT"}, name="cliente_editar")
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
            $params->tel_cliente = $this->campos->removeMascara($request->get('tel_cliente'));
            $params->cpf_cliente = $this->campos->removeMascara($request->get('cpf_cliente'));
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

}
