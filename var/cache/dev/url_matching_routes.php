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
        '/API/user/modal' => [[['_route' => 'user_modal', '_controller' => 'App\\Controller\\API\\UserControllerAPI::userModal'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/descargar-pdf' => [[['_route' => 'descargar_pdf', '_controller' => 'App\\Controller\\PdfController::downloadPdf'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
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
                .'|/API/(?'
                    .'|alumnos(?'
                        .'|(?:/([^/]++))?(*:234)'
                        .'|(*:242)'
                        .'|/([^/]++)(?'
                            .'|(*:262)'
                        .')'
                    .')'
                    .'|edificios(?'
                        .'|(?:/([^/]++))?(*:298)'
                        .'|(*:306)'
                        .'|/([^/]++)(?'
                            .'|(*:326)'
                        .')'
                    .')'
                    .'|users(?'
                        .'|(?:/([^/]++))?(*:358)'
                        .'|(*:366)'
                        .'|/([^/]++)(?'
                            .'|(*:386)'
                        .')'
                    .')'
                .')'
                .'|/enviar\\-pdf/([^/]++)(*:418)'
                .'|/activate/([^/]++)(*:444)'
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
        234 => [[['_route' => 'alumno_index', 'id' => null, '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'alumno_create', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        262 => [
            [['_route' => 'alumno_update', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'alumno_delete', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        298 => [[['_route' => 'edificio_index', 'id' => null, '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        306 => [[['_route' => 'edificio_create', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        326 => [
            [['_route' => 'edificio_update', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'edificio_delete', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        358 => [[['_route' => 'user_index', 'id' => null, '_controller' => 'App\\Controller\\API\\UserControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\API\\UserControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        386 => [
            [['_route' => 'user_update', '_controller' => 'App\\Controller\\API\\UserControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\API\\UserControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        418 => [[['_route' => 'enviar_pdf', '_controller' => 'App\\Controller\\PdfController::sendPdf'], ['destinatario'], null, null, false, true, null]],
        444 => [
            [['_route' => 'app_activate', '_controller' => 'App\\Controller\\RegistrationController::activate'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
