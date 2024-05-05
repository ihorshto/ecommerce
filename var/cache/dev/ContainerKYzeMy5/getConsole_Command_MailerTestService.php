<?php

namespace ContainerKYzeMy5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MailerTestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.mailer_test' shared service.
     *
     * @return \Symfony\Component\Mailer\Command\MailerTestCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Command/MailerTestCommand.php';

        $container->privates['console.command.mailer_test'] = $instance = new \Symfony\Component\Mailer\Command\MailerTestCommand(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')));

        $instance->setName('mailer:test');
        $instance->setDescription('Test Mailer transports by sending an email');

        return $instance;
    }
}
