<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLoZD4n3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLoZD4n3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLoZD4n3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLoZD4n3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLoZD4n3\App_KernelDevDebugContainer([
    'container.build_hash' => 'LoZD4n3',
    'container.build_id' => 'deb9f247',
    'container.build_time' => 1712939366,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLoZD4n3');
