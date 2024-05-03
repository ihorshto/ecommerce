<?php

namespace ContainerAuBdONq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Handler_NativeFileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.handler.native_file' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php';

        return $container->privates['session.handler.native_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler(new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($container->targetDir.''.'/sessions')));
    }
}
