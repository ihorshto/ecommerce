<?php

namespace ContainerLoZD4n3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBonjourControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BonjourController' shared autowired service.
     *
     * @return \App\Controller\BonjourController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BonjourController.php';

        $container->services['App\\Controller\\BonjourController'] = $instance = new \App\Controller\BonjourController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\BonjourController', $container));

        return $instance;
    }
}
