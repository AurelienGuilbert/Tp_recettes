<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/get-recipes' => [[['_route' => 'getRecipes', '_controller' => 'App\\Controller\\RequestController::getRecipes'], null, null, null, false, false, null]],
        '/post-recipes' => [[['_route' => 'postRecipes', '_controller' => 'App\\Controller\\RequestController::postRecipes'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/get\\-recipe(?:/([^/]++))?(*:33)'
                .'|/edit\\-recipe(?:/([^/]++))?(*:67)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:105)'
                    .'|wdt/([^/]++)(*:125)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:171)'
                            .'|router(*:185)'
                            .'|exception(?'
                                .'|(*:205)'
                                .'|\\.css(*:218)'
                            .')'
                        .')'
                        .'|(*:228)'
                    .')'
                .')'
                .'|/(.*)(*:243)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'getRecipeId', 'id' => null, '_controller' => 'App\\Controller\\RequestController::modifyRecipe'], ['id'], null, null, false, true, null]],
        67 => [[['_route' => 'editRecipe', 'id' => null, '_controller' => 'App\\Controller\\RequestController::editRecipe'], ['id'], null, null, false, true, null]],
        105 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        125 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        171 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        185 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        205 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        218 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        228 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        243 => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\BaseController::index'], ['wildcard'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
