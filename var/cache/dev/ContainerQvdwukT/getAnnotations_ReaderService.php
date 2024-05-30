<?php

namespace ContainerQvdwukT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_ReaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     *
     * @deprecated Since symfony/framework-bundle 6.4: The "annotations.reader" service is deprecated without replacement.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '6.4', 'The "annotations.reader" service is deprecated without replacement.');

        $container->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required');

        return $instance;
    }
}
