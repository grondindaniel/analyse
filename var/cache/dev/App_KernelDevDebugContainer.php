<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF2mmpiH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF2mmpiH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF2mmpiH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF2mmpiH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF2mmpiH\App_KernelDevDebugContainer([
    'container.build_hash' => 'F2mmpiH',
    'container.build_id' => 'c09fe646',
    'container.build_time' => 1597411231,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF2mmpiH');
