<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV18zncM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV18zncM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerV18zncM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerV18zncM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerV18zncM\App_KernelDevDebugContainer([
    'container.build_hash' => 'V18zncM',
    'container.build_id' => 'd399a58b',
    'container.build_time' => 1715196419,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV18zncM');
