<?php
// src/EventSubscriber/TokenSubscriber.php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{
    public function onKernelController(ControllerEvent $event): void
    {
        $controller = $event->getController();

        // Cuando una clase de controlador define múltiples métodos de acción,
        // el controlador se devuelve como [$controllerInstance, 'methodName']
        if (is_array($controller)) {
            $controllerInstance = $controller[0];
            $method = $controller[1];
        } else {
            return;
        }

        // Verifica si el método es 'downloadPdf' del 'PdfController'
        if ($method === "downloadPdf" && get_class($controllerInstance) === 'App\Controller\PdfController') {
            // Aquí puedes añadir la lógica para decidir si lanzar una excepción
            throw new AccessDeniedHttpException('No se puede descargar el PDF');
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}


?>