<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'admin.article.index', '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], null, null, null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'admin.article.new', '_controller' => 'App\\Controller\\Admin\\ArticleController::new'], null, null, null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'admin.categorie.index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], null, null, null, true, false, null]],
        '/admin/categorie/new' => [[['_route' => 'admin.categorie.new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article.index', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|article/(?'
                        .'|edit/([^/]++)(*:236)'
                        .'|delete/([^/]++)(*:259)'
                    .')'
                    .'|categorie/(?'
                        .'|edit/([^/]++)(*:294)'
                        .'|delete/([^/]++)(*:317)'
                        .'|([^/]++)(*:333)'
                    .')'
                .')'
                .'|/categorie/([^/]++)(*:362)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => 'admin.article.edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'admin.article.delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'admin.categorie.edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'admin.categorie.delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        333 => [[['_route' => 'admin.categorie.show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['id'], null, null, false, true, null]],
        362 => [
            [['_route' => 'categorie.show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
