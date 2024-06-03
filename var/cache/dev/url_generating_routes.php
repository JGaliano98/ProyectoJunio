<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'actividad_index' => [[], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::index'], [], [['text', '/API/actividades']], [], [], []],
    'actividad_show' => [['id'], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/actividades']], [], [], []],
    'actividad_create' => [[], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::create'], [], [['text', '/API/actividades']], [], [], []],
    'actividad_delete' => [['id'], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/actividades']], [], [], []],
    'alumno_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'alumno_create' => [[], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::create'], [], [['text', '/API/alumnos']], [], [], []],
    'alumno_update' => [['id'], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'alumno_delete' => [['id'], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'edificio_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'edificio_create' => [[], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::create'], [], [['text', '/API/edificios']], [], [], []],
    'edificio_update' => [['id'], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'edificio_delete' => [['id'], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'espacio_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\EspacioControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/espacios']], [], [], []],
    'api_evento_index' => [[], ['_controller' => 'App\\Controller\\API\\EventoControllerAPI::index'], [], [['text', '/API/eventos']], [], [], []],
    'grupo_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\GrupoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/grupos']], [], [], []],
    'recurso_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\RecursoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/recursos']], [], [], []],
    'user_index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\UserControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'user_create' => [[], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::create'], [], [['text', '/API/users']], [], [], []],
    'user_update' => [['id'], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'user_modal' => [[], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::userModal'], [], [['text', '/API/user/modal']], [], [], []],
    'actividades' => [[], ['_controller' => 'App\\Controller\\ActividadController::index'], [], [['text', '/actividades']], [], [], []],
    'actividad' => [[], ['_controller' => 'App\\Controller\\ActivityController::index'], [], [['text', '/actividad']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'admin_actividad' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::actividad'], [], [['text', '/admin/actividad']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'descargar_pdf' => [[], ['_controller' => 'App\\Controller\\PdfController::downloadPdf'], [], [['text', '/descargar-pdf']], [], [], []],
    'enviar_pdf' => [['destinatario'], ['_controller' => 'App\\Controller\\PdfController::sendPdf'], [], [['variable', '/', '[^/]++', 'destinatario', true], ['text', '/enviar-pdf']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_activate' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::activate'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/activate']], [], [], []],
    'App\Controller\API\ActividadControllerAPI::index' => [[], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::index'], [], [['text', '/API/actividades']], [], [], []],
    'App\Controller\API\ActividadControllerAPI::show' => [['id'], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/actividades']], [], [], []],
    'App\Controller\API\ActividadControllerAPI::create' => [[], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::create'], [], [['text', '/API/actividades']], [], [], []],
    'App\Controller\API\ActividadControllerAPI::delete' => [['id'], ['_controller' => 'App\\Controller\\API\\ActividadControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/actividades']], [], [], []],
    'App\Controller\API\AlumnoControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'App\Controller\API\AlumnoControllerAPI::create' => [[], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::create'], [], [['text', '/API/alumnos']], [], [], []],
    'App\Controller\API\AlumnoControllerAPI::update' => [['id'], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'App\Controller\API\AlumnoControllerAPI::delete' => [['id'], ['_controller' => 'App\\Controller\\API\\AlumnoControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/alumnos']], [], [], []],
    'App\Controller\API\EdificioControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\EdificioControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'App\Controller\API\EdificioControllerAPI::create' => [[], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::create'], [], [['text', '/API/edificios']], [], [], []],
    'App\Controller\API\EdificioControllerAPI::update' => [['id'], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'App\Controller\API\EdificioControllerAPI::delete' => [['id'], ['_controller' => 'App\\Controller\\API\\EdificioControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/edificios']], [], [], []],
    'App\Controller\API\EspacioControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\EspacioControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/espacios']], [], [], []],
    'App\Controller\API\EventoControllerAPI::index' => [[], ['_controller' => 'App\\Controller\\API\\EventoControllerAPI::index'], [], [['text', '/API/eventos']], [], [], []],
    'App\Controller\API\GrupoControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\GrupoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/grupos']], [], [], []],
    'App\Controller\API\RecursoControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\RecursoControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/recursos']], [], [], []],
    'App\Controller\API\UserControllerAPI::index' => [['id'], ['id' => null, '_controller' => 'App\\Controller\\API\\UserControllerAPI::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'App\Controller\API\UserControllerAPI::create' => [[], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::create'], [], [['text', '/API/users']], [], [], []],
    'App\Controller\API\UserControllerAPI::update' => [['id'], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'App\Controller\API\UserControllerAPI::delete' => [['id'], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/API/users']], [], [], []],
    'App\Controller\API\UserControllerAPI::userModal' => [[], ['_controller' => 'App\\Controller\\API\\UserControllerAPI::userModal'], [], [['text', '/API/user/modal']], [], [], []],
    'App\Controller\ActividadController::index' => [[], ['_controller' => 'App\\Controller\\ActividadController::index'], [], [['text', '/actividades']], [], [], []],
    'App\Controller\ActivityController::index' => [[], ['_controller' => 'App\\Controller\\ActivityController::index'], [], [['text', '/actividad']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\Admin\DashboardController::actividad' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::actividad'], [], [['text', '/admin/actividad']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\PdfController::downloadPdf' => [[], ['_controller' => 'App\\Controller\\PdfController::downloadPdf'], [], [['text', '/descargar-pdf']], [], [], []],
    'App\Controller\PdfController::sendPdf' => [['destinatario'], ['_controller' => 'App\\Controller\\PdfController::sendPdf'], [], [['variable', '/', '[^/]++', 'destinatario', true], ['text', '/enviar-pdf']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::activate' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::activate'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/activate']], [], [], []],
];
