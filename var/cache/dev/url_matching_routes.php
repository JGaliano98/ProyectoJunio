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
        '/API/actividades' => [
            [['_route' => 'actividad_index', '_controller' => 'App\\Controller\\API\\ActividadControllerAPI::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'actividad_create', '_controller' => 'App\\Controller\\API\\ActividadControllerAPI::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/API/eventos' => [[['_route' => 'api_evento_index', '_controller' => 'App\\Controller\\API\\EventoControllerAPI::index'], null, ['GET' => 0], null, false, false, null]],
        '/API/user/modal' => [[['_route' => 'user_modal', '_controller' => 'App\\Controller\\API\\UserControllerAPI::userModal'], null, ['GET' => 0], null, false, false, null]],
        '/actividades' => [[['_route' => 'actividades', '_controller' => 'App\\Controller\\ActividadController::index'], null, null, null, false, false, null]],
        '/actividad' => [[['_route' => 'actividad', '_controller' => 'App\\Controller\\ActivityController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/actividad' => [[['_route' => 'admin_actividad', '_controller' => 'App\\Controller\\Admin\\DashboardController::actividad'], null, null, null, false, false, null]],
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
                    .'|a(?'
                        .'|ctividades/([^/]++)(*:233)'
                        .'|lumnos(?'
                            .'|(?:/([^/]++))?(*:264)'
                            .'|(*:272)'
                            .'|/([^/]++)(?'
                                .'|(*:292)'
                            .')'
                        .')'
                    .')'
                    .'|e(?'
                        .'|dificios(?'
                            .'|(?:/([^/]++))?(*:332)'
                            .'|(*:340)'
                            .'|/([^/]++)(?'
                                .'|(*:360)'
                            .')'
                        .')'
                        .'|spacios(?:/([^/]++))?(*:391)'
                    .')'
                    .'|grupos(?:/([^/]++))?(*:420)'
                    .'|recursos(?:/([^/]++))?(*:450)'
                    .'|users(?'
                        .'|(?:/([^/]++))?(*:480)'
                        .'|(*:488)'
                        .'|/([^/]++)(?'
                            .'|(*:508)'
                        .')'
                    .')'
                .')'
                .'|/enviar\\-pdf/([^/]++)(*:540)'
                .'|/activate/([^/]++)(*:566)'
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
        233 => [[['_route' => 'actividad_show', '_controller' => 'App\\Controller\\API\\ActividadControllerAPI::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'alumno_index', 'id' => null, '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'alumno_create', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        292 => [
            [['_route' => 'alumno_update', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'alumno_delete', '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        332 => [[['_route' => 'edificio_index', 'id' => null, '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'edificio_create', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        360 => [
            [['_route' => 'edificio_update', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'edificio_delete', '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        391 => [[['_route' => 'espacio_index', 'id' => null, '_controller' => 'App\\Controller\\API\\EspacioControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'grupo_index', 'id' => null, '_controller' => 'App\\Controller\\API\\GrupoControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        450 => [[['_route' => 'recurso_index', 'id' => null, '_controller' => 'App\\Controller\\API\\RecursoControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'user_index', 'id' => null, '_controller' => 'App\\Controller\\API\\UserControllerAPI::index'], ['id'], ['GET' => 0], null, false, true, null]],
        488 => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\API\\UserControllerAPI::create'], [], ['POST' => 0], null, false, false, null]],
        508 => [
            [['_route' => 'user_update', '_controller' => 'App\\Controller\\API\\UserControllerAPI::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\API\\UserControllerAPI::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        540 => [[['_route' => 'enviar_pdf', '_controller' => 'App\\Controller\\PdfController::sendPdf'], ['destinatario'], null, null, false, true, null]],
        566 => [
            [['_route' => 'app_activate', '_controller' => 'App\\Controller\\RegistrationController::activate'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
