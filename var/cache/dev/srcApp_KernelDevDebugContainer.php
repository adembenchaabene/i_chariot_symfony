<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMaxgxDv\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMaxgxDv/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMaxgxDv.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMaxgxDv\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMaxgxDv\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MaxgxDv',
    'container.build_id' => '3a825d12',
    'container.build_time' => 1652138921,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMaxgxDv');
