<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2x3SIB6\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2x3SIB6/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container2x3SIB6.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container2x3SIB6\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container2x3SIB6\appAppKernelProdContainer([
    'container.build_hash' => '2x3SIB6',
    'container.build_id' => '9c04cdad',
    'container.build_time' => 1685374929,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2x3SIB6');
