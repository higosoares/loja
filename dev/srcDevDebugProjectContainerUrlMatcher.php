<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/carrinho' => array(array('_route' => 'carrinho', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarCarrinho'), null, null, null),
                    '/checagem' => array(array('_route' => 'checagem', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarChecagem'), null, null, null),
                    '/admin/carrinho/cadastrar' => array(array('_route' => 'admin_cadastrar_carrinho', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::cadastrarCarrinho'), null, null, null),
                    '/admin/carrinhos' => array(array('_route' => 'admin_carrinhos', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::mostrarTodosCarrinhosCadastrados'), null, null, null),
                    '/carrinhoproduto' => array(array('_route' => 'carrinhoproduto', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::mostrarCarrinhoProduto'), null, null, null),
                    '/admin/carrinhoproduto/cadastrar' => array(array('_route' => 'admin_cadastrar_carrinhoproduto', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::cadastrarCarrinhoProduto'), null, null, null),
                    '/admin/carrinhoprodutos' => array(array('_route' => 'admin_carrinhoprodutos', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::mostrarTodosCarrinhoProdutosCadastrados'), null, null, null),
                    '/categorias' => array(array('_route' => 'categorias', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostrarCategorias'), null, null, null),
                    '/admin/categoria/cadastrar' => array(array('_route' => 'admin_cadastrar_categoria', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::cadastrarCategoria'), null, null, null),
                    '/admin/categorias' => array(array('_route' => 'admin_categorias', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostrarTodosCategoriasCadastrados'), null, null, null),
                    '/admin/categoriasubcategoria/cadastrar' => array(array('_route' => 'admin_cadastrar_categoriasubcategoria', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::cadastrarCategoriaSubcategoria'), null, null, null),
                    '/admin/categoriasubcategorias' => array(array('_route' => 'admin_categoriasubcategorias', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::mostrarTodasCategoriaSubcategoriasCadastradas'), null, null, null),
                    '/registro' => array(array('_route' => 'registro', '_controller' => 'App\\Controller\\Cliente\\ClienteController::mostrarRegistro'), null, null, null),
                    '/perfil' => array(array('_route' => 'login_control', '_controller' => 'App\\Controller\\Cliente\\ClienteController::loginControlAction'), null, null, null),
                    '/sair' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\Cliente\\ClienteController::logoutAction'), null, null, null),
                    '/admin/cliente/cadastrar' => array(array('_route' => 'admin_cadastrar_cliente', '_controller' => 'App\\Controller\\Cliente\\ClienteController::cadastrarCliente'), null, null, null),
                    '/admin/clientes' => array(array('_route' => 'admin_clientes', '_controller' => 'App\\Controller\\Cliente\\ClienteController::mostrarTodosClientesCadastrados'), null, null, null),
                    '/compra' => array(array('_route' => 'compra', '_controller' => 'App\\Controller\\Compra\\CompraController::mostrarCompra'), null, null, null),
                    '/admin/compra/cadastrar' => array(array('_route' => 'admin_cadastrar_compra', '_controller' => 'App\\Controller\\Compra\\CompraController::cadastrarCompra'), null, null, null),
                    '/admin/compras' => array(array('_route' => 'admin_compras', '_controller' => 'App\\Controller\\Compra\\CompraController::mostrarTodasComprasCadastradas'), null, null, null),
                    '/entrega' => array(array('_route' => 'entrega', '_controller' => 'App\\Controller\\Entrega\\EntregaController::mostrarEntrega'), null, null, null),
                    '/admin/entrega/cadastrar' => array(array('_route' => 'admin_cadastrar_entrega', '_controller' => 'App\\Controller\\Entrega\\EntregaController::cadastrarEntrega'), null, null, null),
                    '/admin/entregas' => array(array('_route' => 'admin_entregas', '_controller' => 'App\\Controller\\Entrega\\EntregaController::mostrarTodasEntregasCadastradas'), null, null, null),
                    '/formapagamento' => array(array('_route' => 'formapamento', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::mostrarFormaPagamento'), null, null, null),
                    '/admin/formapagamento/cadastrar' => array(array('_route' => 'admin_cadastrar_formapagamento', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::cadastrarFormapagamento'), null, null, null),
                    '/admin/formapagamentos' => array(array('_route' => 'admin_formapagamentos', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::mostrarTodasFormaspagamentoCadastrados'), null, null, null),
                    '/' => array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\Home\\DefaultController::mostrarHomePage'), null, null, null),
                    '/menu' => array(array('_route' => 'menu', '_controller' => 'App\\Controller\\Home\\DefaultController::mostrarMenuAction'), null, null, null),
                    '/contato' => array(array('_route' => 'contato', '_controller' => 'App\\Controller\\Home\\DefaultController::mostrarContato'), null, null, null),
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\Home\\DefaultController::mostraAdmin'), null, null, null),
                    '/itens' => array(array('_route' => 'itens', '_controller' => 'App\\Controller\\Item\\ItemController::mostrarItens'), null, null, null),
                    '/admin/item/cadastrar' => array(array('_route' => 'admin_cadastrar_item', '_controller' => 'App\\Controller\\Item\\ItemController::cadastrarItem'), null, null, null),
                    '/admin/itens' => array(array('_route' => 'admin_itens', '_controller' => 'App\\Controller\\Item\\ItemController::mostrarTodosItensCadastrados'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\Login\\LoginController::mostrarLogin'), null, null, null),
                    '/produto_item' => array(array('_route' => 'produto_item', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::mostrarProdutoItem'), null, null, null),
                    '/admin/produtoitem/cadastrar' => array(array('_route' => 'admin_cadastrar_produtoitem', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::cadastrarProdutoItem'), null, null, null),
                    '/admin/produtoitens' => array(array('_route' => 'admin_produtoitens', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::mostrarTodasprodutoItensCadastrados'), null, null, null),
                    '/produtos' => array(array('_route' => 'produtos', '_controller' => 'App\\Controller\\Produto\\ProdutoController::mostrar_produtos_loja'), null, null, null),
                    '/admin/produto/cadastrar' => array(array('_route' => 'admin_cadastrar_produto', '_controller' => 'App\\Controller\\Produto\\ProdutoController::cadastrarProduto'), null, null, null),
                    '/admin/produtos' => array(array('_route' => 'admin_produtos', '_controller' => 'App\\Controller\\Produto\\ProdutoController::mostrarTodosProdutosCadastrados'), null, null, null),
                    '/subcategoria' => array(array('_route' => 'subcategoria', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::mostrarSubcategoria'), null, null, null),
                    '/admin/subcategoria/cadastrar' => array(array('_route' => 'admin_cadastrar_subcategoria', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::cadastrarSubcategoria'), null, null, null),
                    '/admin/subcategorias' => array(array('_route' => 'admin_subcategorias', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::mostrarTodasSubcategoriasCadastradas'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|c(?'
                            .'|a(?'
                                .'|rrinho(?'
                                    .'|/(?'
                                        .'|editar/([^/]++)(*:53)'
                                        .'|de(?'
                                            .'|talhes/([^/]++)(*:80)'
                                            .'|letar/([^/]++)(*:101)'
                                        .')'
                                    .')'
                                    .'|produto/(?'
                                        .'|editar/([^/]++)(*:137)'
                                        .'|de(?'
                                            .'|talhes/([^/]++)(*:165)'
                                            .'|letar/([^/]++)(*:187)'
                                        .')'
                                    .')'
                                .')'
                                .'|tegoria(?'
                                    .'|/(?'
                                        .'|editar/([^/]++)(*:227)'
                                        .'|de(?'
                                            .'|talhes/([^/]++)(*:255)'
                                            .'|letar/([^/]++)(*:277)'
                                        .')'
                                    .')'
                                    .'|subcategoria/(?'
                                        .'|editar/([^/]++)(*:318)'
                                        .'|de(?'
                                            .'|talhes/([^/]++)(*:346)'
                                            .'|letar/([^/]++)(*:368)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|liente/(?'
                                .'|editar/([^/]++)(*:405)'
                                .'|de(?'
                                    .'|talhes/([^/]++)(*:433)'
                                    .'|letar/([^/]++)(*:455)'
                                .')'
                            .')'
                            .'|ompra/(?'
                                .'|editar/([^/]++)(*:489)'
                                .'|de(?'
                                    .'|talhes/([^/]++)(*:517)'
                                    .'|letar/([^/]++)(*:539)'
                                .')'
                            .')'
                        .')'
                        .'|entrega/(?'
                            .'|editar/([^/]++)(*:576)'
                            .'|de(?'
                                .'|talhes/([^/]++)(*:604)'
                                .'|letar/([^/]++)(*:626)'
                            .')'
                        .')'
                        .'|formapagamento/(?'
                            .'|editar/([^/]++)(*:669)'
                            .'|de(?'
                                .'|talhes/([^/]++)(*:697)'
                                .'|letar/([^/]++)(*:719)'
                            .')'
                        .')'
                        .'|item/(?'
                            .'|editar/([^/]++)(*:752)'
                            .'|de(?'
                                .'|talhes/([^/]++)(*:780)'
                                .'|letar/([^/]++)(*:802)'
                            .')'
                        .')'
                        .'|produto(?'
                            .'|item/(?'
                                .'|editar/([^/]++)(*:845)'
                                .'|de(?'
                                    .'|talhes/([^/]++)(*:873)'
                                    .'|letar/([^/]++)(*:895)'
                                .')'
                            .')'
                            .'|/(?'
                                .'|editar/([^/]++)(*:924)'
                                .'|de(?'
                                    .'|talhes/([^/]++)(*:952)'
                                    .'|letar/([^/]++)(*:974)'
                                .')'
                            .')'
                        .')'
                        .'|subcategoria/(?'
                            .'|editar/([^/]++)(*:1016)'
                            .'|de(?'
                                .'|talhes/([^/]++)(*:1045)'
                                .'|letar/([^/]++)(*:1068)'
                            .')'
                        .')'
                    .')'
                    .'|/categoria(?'
                        .'|/([^/]++)(*:1102)'
                        .'|subcategoria/([^/]++)(*:1132)'
                    .')'
                    .'|/produto/([^/]++)(*:1159)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:1199)'
                        .'|wdt/([^/]++)(*:1220)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1267)'
                                .'|router(*:1282)'
                                .'|exception(?'
                                    .'|(*:1303)'
                                    .'|\\.css(*:1317)'
                                .')'
                            .')'
                            .'|(*:1328)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            53 => array(array('_route' => 'admin_carrinho_editar', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::editarCarrinho'), array('id'), null, null),
                            80 => array(array('_route' => 'admin_carrinho_detalhes', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::detalhesCarrinho'), array('id'), null, null),
                            101 => array(array('_route' => 'admin_carrinho_deletar', '_controller' => 'App\\Controller\\Carrinho\\CarrinhoController::deletarCarrinho'), array('id'), null, null),
                            137 => array(array('_route' => 'admin_carrinhoproduto_editar', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::editarCarrinhoProduto'), array('id'), null, null),
                            165 => array(array('_route' => 'admin_carrinhoproduto_detalhes', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::detalhesCarrinhoProduto'), array('id'), null, null),
                            187 => array(array('_route' => 'admin_carrinhoproduto_deletar', '_controller' => 'App\\Controller\\Carrinho\\Produto\\CarrinhoProdutoController::deletarCarrinhoProduto'), array('id'), null, null),
                            227 => array(array('_route' => 'admin_categoria_editar', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::editarCategoria'), array('id'), null, null),
                            255 => array(array('_route' => 'admin_categoria_detalhes', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::detalhesCategoria'), array('id'), null, null),
                            277 => array(array('_route' => 'admin_categoria_deletar', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::deletarCategoria'), array('id'), null, null),
                            318 => array(array('_route' => 'admin_categoriasubcategoria_editar', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::editarCategoriaSubcategoria'), array('id'), null, null),
                            346 => array(array('_route' => 'admin_categoriasubcategoria_detalhes', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::detalhesCategoriaSubcategoria'), array('id'), null, null),
                            368 => array(array('_route' => 'admin_categoriasubcategoria_deletar', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::deletarCategoriaSubcategoria'), array('id'), null, null),
                            405 => array(array('_route' => 'admin_cliente_editar', '_controller' => 'App\\Controller\\Cliente\\ClienteController::editarCliente'), array('id'), null, null),
                            433 => array(array('_route' => 'admin_cliente_detalhes', '_controller' => 'App\\Controller\\Cliente\\ClienteController::detalhesCliente'), array('id'), null, null),
                            455 => array(array('_route' => 'admin_cliente_deletar', '_controller' => 'App\\Controller\\Cliente\\ClienteController::deletarCliente'), array('id'), null, null),
                            489 => array(array('_route' => 'admin_compra_editar', '_controller' => 'App\\Controller\\Compra\\CompraController::editarCompra'), array('id'), null, null),
                            517 => array(array('_route' => 'admin_compra_detalhes', '_controller' => 'App\\Controller\\Compra\\CompraController::detalhesCompra'), array('id'), null, null),
                            539 => array(array('_route' => 'admin_compra_deletar', '_controller' => 'App\\Controller\\Compra\\CompraController::deletarCompra'), array('id'), null, null),
                            576 => array(array('_route' => 'admin_entrega_editar', '_controller' => 'App\\Controller\\Entrega\\EntregaController::editarEntrega'), array('id'), null, null),
                            604 => array(array('_route' => 'admin_entrega_detalhes', '_controller' => 'App\\Controller\\Entrega\\EntregaController::detalhesEntrega'), array('id'), null, null),
                            626 => array(array('_route' => 'admin_entrega_deletar', '_controller' => 'App\\Controller\\Entrega\\EntregaController::deletarEntrega'), array('id'), null, null),
                            669 => array(array('_route' => 'admin_formapagamento_editar', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::editarFormapagamento'), array('id'), null, null),
                            697 => array(array('_route' => 'admin_formapagamento_detalhes', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::detalhesFormapagamento'), array('id'), null, null),
                            719 => array(array('_route' => 'admin_formapagamento_deletar', '_controller' => 'App\\Controller\\Formapagamento\\FormapagamentoController::deletarFormapagamento'), array('id'), null, null),
                            752 => array(array('_route' => 'admin_item_editar', '_controller' => 'App\\Controller\\Item\\ItemController::editarItem'), array('id'), null, null),
                            780 => array(array('_route' => 'admin_item_detalhes', '_controller' => 'App\\Controller\\Item\\ItemController::detalhesItem'), array('id'), null, null),
                            802 => array(array('_route' => 'admin_item_deletar', '_controller' => 'App\\Controller\\Item\\ItemController::deletarItem'), array('id'), null, null),
                            845 => array(array('_route' => 'admin_produtoitem_editar', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::editarProdutoItem'), array('id'), null, null),
                            873 => array(array('_route' => 'admin_produtoitem_detalhes', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::detalhesProdutoItem'), array('id'), null, null),
                            895 => array(array('_route' => 'admin_produtoitem_deletar', '_controller' => 'App\\Controller\\Produto\\Item\\ProdutoItemController::deletarProdutoItem'), array('id'), null, null),
                            924 => array(array('_route' => 'admin_produto_editar', '_controller' => 'App\\Controller\\Produto\\ProdutoController::editarProduto'), array('id'), null, null),
                            952 => array(array('_route' => 'admin_produto_detalhes', '_controller' => 'App\\Controller\\Produto\\ProdutoController::detalhesProduto'), array('id'), null, null),
                            974 => array(array('_route' => 'admin_produto_deletar', '_controller' => 'App\\Controller\\Produto\\ProdutoController::deletarProduto'), array('id'), null, null),
                            1016 => array(array('_route' => 'admin_subcategoria_editar', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::editarSubcategoria'), array('id'), null, null),
                            1045 => array(array('_route' => 'admin_subcategoria_detalhes', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::detalhesSubcategoria'), array('id'), null, null),
                            1068 => array(array('_route' => 'admin_subcategoria_deletar', '_controller' => 'App\\Controller\\SubCategoria\\SubcategoriaController::deletarSubcategoria'), array('id'), null, null),
                            1102 => array(array('_route' => 'categoria_detalhes', '_controller' => 'App\\Controller\\Categoria\\CategoriaController::mostra_categoria_loja'), array('id'), null, null),
                            1132 => array(array('_route' => 'categoriasubcategoria', '_controller' => 'App\\Controller\\Categoria\\SubCategoria\\CategoriaSubcategoriaController::mostrarCategoriaSubcategoria'), array('id'), null, null),
                            1159 => array(array('_route' => 'produto_detalhes', '_controller' => 'App\\Controller\\Produto\\ProdutoController::mostra_produto_loja'), array('id'), null, null),
                            1199 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            1220 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            1267 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            1282 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            1303 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            1317 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            1328 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (1328 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
