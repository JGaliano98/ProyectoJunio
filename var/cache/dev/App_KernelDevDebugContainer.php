<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAykLfFU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAykLfFU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAykLfFU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAykLfFU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAykLfFU\App_KernelDevDebugContainer([
    'container.build_hash' => 'AykLfFU',
    'container.build_id' => '30061805',
    'container.build_time' => 1714472983,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAykLfFU');