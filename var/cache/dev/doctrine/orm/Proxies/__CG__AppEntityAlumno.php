<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Alumno extends \App\Entity\Alumno implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'correo' => [parent::class, 'correo', null],
        "\0".parent::class."\0".'detalleActividads' => [parent::class, 'detalleActividads', null],
        "\0".parent::class."\0".'fecha_nacimiento' => [parent::class, 'fecha_nacimiento', null],
        "\0".parent::class."\0".'grupo' => [parent::class, 'grupo', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        'correo' => [parent::class, 'correo', null],
        'detalleActividads' => [parent::class, 'detalleActividads', null],
        'fecha_nacimiento' => [parent::class, 'fecha_nacimiento', null],
        'grupo' => [parent::class, 'grupo', null],
        'id' => [parent::class, 'id', null],
        'nombre' => [parent::class, 'nombre', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
