<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'carrinho' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarCarrinho'), array(), array(array('text', '/carrinho')), array(), array()),
        'checagem' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarChecagem'), array(), array(array('text', '/checagem')), array(), array()),
        'admin_cadastrar_carrinho' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::cadastrarCarrinho'), array(), array(array('text', '/admin/carrinho/cadastrar')), array(), array()),
        'admin_carrinhos' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarTodosCarrinhosCadastrados'), array(), array(array('text', '/admin/carrinhos')), array(), array()),
        'admin_carrinho_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::editarCarrinho'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinho/editar')), array(), array()),
        'admin_carrinho_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::detalhesCarrinho'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinho/detalhes')), array(), array()),
        'admin_carrinho_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::deletarCarrinho'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinho/deletar')), array(), array()),
        'carrinhoproduto' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::mostrarCarrinhoProduto'), array(), array(array('text', '/carrinhoproduto')), array(), array()),
        'admin_cadastrar_carrinhoproduto' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::cadastrarCarrinhoProduto'), array(), array(array('text', '/admin/carrinhoproduto/cadastrar')), array(), array()),
        'admin_carrinhoprodutos' => array(array(), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::mostrarTodosCarrinhoProdutosCadastrados'), array(), array(array('text', '/admin/carrinhoprodutos')), array(), array()),
        'admin_carrinhoproduto_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::editarCarrinhoProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinhoproduto/editar')), array(), array()),
        'admin_carrinhoproduto_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::detalhesCarrinhoProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinhoproduto/detalhes')), array(), array()),
        'admin_carrinhoproduto_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::deletarCarrinhoProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/carrinhoproduto/deletar')), array(), array()),
        'categoria_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostra_categoria_loja'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/categoria')), array(), array()),
        'categorias' => array(array(), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostrarCategorias'), array(), array(array('text', '/categorias')), array(), array()),
        'admin_cadastrar_categoria' => array(array(), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::cadastrarCategoria'), array(), array(array('text', '/admin/categoria/cadastrar')), array(), array()),
        'admin_categorias' => array(array(), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostrarTodosCategoriasCadastrados'), array(), array(array('text', '/admin/categorias')), array(), array()),
        'admin_categoria_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::editarCategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoria/editar')), array(), array()),
        'admin_categoria_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::detalhesCategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoria/detalhes')), array(), array()),
        'admin_categoria_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\CategoriaController::deletarCategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoria/deletar')), array(), array()),
        'categoriasubcategoria' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::mostrarCategoriaSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/categoriasubcategoria')), array(), array()),
        'admin_cadastrar_categoriasubcategoria' => array(array(), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::cadastrarCategoriaSubcategoria'), array(), array(array('text', '/admin/categoriasubcategoria/cadastrar')), array(), array()),
        'admin_categoriasubcategorias' => array(array(), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::mostrarTodasCategoriaSubcategoriasCadastradas'), array(), array(array('text', '/admin/categoriasubcategorias')), array(), array()),
        'admin_categoriasubcategoria_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::editarCategoriaSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoriasubcategoria/editar')), array(), array()),
        'admin_categoriasubcategoria_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::detalhesCategoriaSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoriasubcategoria/detalhes')), array(), array()),
        'admin_categoriasubcategoria_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::deletarCategoriaSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/categoriasubcategoria/deletar')), array(), array()),
        'registro' => array(array(), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::mostrarRegistro'), array(), array(array('text', '/registro')), array(), array()),
        'login_control' => array(array(), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::loginControlAction'), array(), array(array('text', '/perfil')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::logoutAction'), array(), array(array('text', '/sair')), array(), array()),
        'admin_cadastrar_cliente' => array(array(), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::cadastrarCliente'), array(), array(array('text', '/admin/cliente/cadastrar')), array(), array()),
        'admin_clientes' => array(array(), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::mostrarTodosClientesCadastrados'), array(), array(array('text', '/admin/clientes')), array(), array()),
        'admin_cliente_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::editarCliente'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/cliente/editar')), array(), array()),
        'admin_cliente_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::detalhesCliente'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/cliente/detalhes')), array(), array()),
        'admin_cliente_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Cliente\\ClienteController::deletarCliente'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/cliente/deletar')), array(), array()),
        'compra' => array(array(), array('_controller' => 'App\\Controller\\Compra\\CompraController::mostrarCompra'), array(), array(array('text', '/compra')), array(), array()),
        'admin_cadastrar_compra' => array(array(), array('_controller' => 'App\\Controller\\Compra\\CompraController::cadastrarCompra'), array(), array(array('text', '/admin/compra/cadastrar')), array(), array()),
        'admin_compras' => array(array(), array('_controller' => 'App\\Controller\\Compra\\CompraController::mostrarTodasComprasCadastradas'), array(), array(array('text', '/admin/compras')), array(), array()),
        'admin_compra_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Compra\\CompraController::editarCompra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/compra/editar')), array(), array()),
        'admin_compra_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Compra\\CompraController::detalhesCompra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/compra/detalhes')), array(), array()),
        'admin_compra_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Compra\\CompraController::deletarCompra'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/compra/deletar')), array(), array()),
        'entrega' => array(array(), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::mostrarEntrega'), array(), array(array('text', '/entrega')), array(), array()),
        'admin_cadastrar_entrega' => array(array(), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::cadastrarEntrega'), array(), array(array('text', '/admin/entrega/cadastrar')), array(), array()),
        'admin_entregas' => array(array(), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::mostrarTodasEntregasCadastradas'), array(), array(array('text', '/admin/entregas')), array(), array()),
        'admin_entrega_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::editarEntrega'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/entrega/editar')), array(), array()),
        'admin_entrega_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::detalhesEntrega'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/entrega/detalhes')), array(), array()),
        'admin_entrega_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Entrega\\EntregaController::deletarEntrega'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/entrega/deletar')), array(), array()),
        'formapamento' => array(array(), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::mostrarFormaPagamento'), array(), array(array('text', '/formapagamento')), array(), array()),
        'admin_cadastrar_formapagamento' => array(array(), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::cadastrarFormapagamento'), array(), array(array('text', '/admin/formapagamento/cadastrar')), array(), array()),
        'admin_formapagamentos' => array(array(), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::mostrarTodasFormaspagamentoCadastrados'), array(), array(array('text', '/admin/formapagamentos')), array(), array()),
        'admin_formapagamento_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::editarFormapagamento'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/formapagamento/editar')), array(), array()),
        'admin_formapagamento_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::detalhesFormapagamento'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/formapagamento/detalhes')), array(), array()),
        'admin_formapagamento_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::deletarFormapagamento'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/formapagamento/deletar')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\Home\\DefaultController::mostrarHomePage'), array(), array(array('text', '/')), array(), array()),
        'menu' => array(array(), array('_controller' => 'App\\Controller\\Home\\DefaultController::mostrarMenuAction'), array(), array(array('text', '/menu')), array(), array()),
        'contato' => array(array(), array('_controller' => 'App\\Controller\\Home\\DefaultController::mostrarContato'), array(), array(array('text', '/contato')), array(), array()),
        'admin' => array(array(), array('_controller' => 'App\\Controller\\Home\\DefaultController::mostraAdmin'), array(), array(array('text', '/admin')), array(), array()),
        'itens' => array(array(), array('_controller' => 'App\\Controller\\Item\\ItemController::mostrarItens'), array(), array(array('text', '/itens')), array(), array()),
        'admin_cadastrar_item' => array(array(), array('_controller' => 'App\\Controller\\Item\\ItemController::cadastrarItem'), array(), array(array('text', '/admin/item/cadastrar')), array(), array()),
        'admin_itens' => array(array(), array('_controller' => 'App\\Controller\\Item\\ItemController::mostrarTodosItensCadastrados'), array(), array(array('text', '/admin/itens')), array(), array()),
        'admin_item_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Item\\ItemController::editarItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/item/editar')), array(), array()),
        'admin_item_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Item\\ItemController::detalhesItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/item/detalhes')), array(), array()),
        'admin_item_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Item\\ItemController::deletarItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/item/deletar')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\Login\\LoginController::mostrarLogin'), array(), array(array('text', '/login')), array(), array()),
        'produto_item' => array(array(), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::mostrarProdutoItem'), array(), array(array('text', '/produto_item')), array(), array()),
        'admin_cadastrar_produtoitem' => array(array(), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::cadastrarProdutoItem'), array(), array(array('text', '/admin/produtoitem/cadastrar')), array(), array()),
        'admin_produtoitens' => array(array(), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::mostrarTodasprodutoItensCadastrados'), array(), array(array('text', '/admin/produtoitens')), array(), array()),
        'admin_produtoitem_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::editarProdutoItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produtoitem/editar')), array(), array()),
        'admin_produtoitem_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::detalhesProdutoItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produtoitem/detalhes')), array(), array()),
        'admin_produtoitem_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::deletarProdutoItem'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produtoitem/deletar')), array(), array()),
        'produtos' => array(array(), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::mostrar_produtos_loja'), array(), array(array('text', '/produtos')), array(), array()),
        'produto_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::mostra_produto_loja'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/produto')), array(), array()),
        'admin_cadastrar_produto' => array(array(), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::cadastrarProduto'), array(), array(array('text', '/admin/produto/cadastrar')), array(), array()),
        'admin_produtos' => array(array(), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::mostrarTodosProdutosCadastrados'), array(), array(array('text', '/admin/produtos')), array(), array()),
        'admin_produto_editar' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::editarProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produto/editar')), array(), array()),
        'admin_produto_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::detalhesProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produto/detalhes')), array(), array()),
        'admin_produto_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\Produto\\ProdutoController::deletarProduto'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/produto/deletar')), array(), array()),
        'subcategoria' => array(array(), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::mostrarSubcategoria'), array(), array(array('text', '/subcategoria')), array(), array()),
        'admin_cadastrar_subcategoria' => array(array(), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::cadastrarSubcategoria'), array(), array(array('text', '/admin/subcategoria/cadastrar')), array(), array()),
        'admin_subcategorias' => array(array(), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::mostrarTodasSubcategoriasCadastradas'), array(), array(array('text', '/admin/subcategorias')), array(), array()),
        'admin_subcategoria_editar' => array(array('id'), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::editarSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/subcategoria/editar')), array(), array()),
        'admin_subcategoria_detalhes' => array(array('id'), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::detalhesSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/subcategoria/detalhes')), array(), array()),
        'admin_subcategoria_deletar' => array(array('id'), array('_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::deletarSubcategoria'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/subcategoria/deletar')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
